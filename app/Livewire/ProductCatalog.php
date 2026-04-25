<?php
declare(strict_types=1);
namespace App\Livewire;

use App\Models\Product;
use App\Models\Tag;
use App\Data\ProductCollectionData;
use App\Data\ProductData;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;


class ProductCatalog extends Component
{
    use WithPagination;

    #[Url]
    public array $selectCollections = [];

    #[Url(except: '')]
    public string $search = '';

    #[Url(except: 'newest')]
    public string $sortBy = 'newest';

    protected function rules(){
        return [
            'selectCollections' => 'array',
            'selectCollections.*' => 'integer|exists:tags,id',
            'search' => 'nullable|string|min:3|max:35',
            'sortBy' => 'in:newest,latest,priceAsc,priceDesc'
        ];
    }

    public function mount()
    {
        try {
            $this->validate();
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Jika ada yang ngotak-ngatik URL secara ilegal, langsung reset ke default
            $this->reset(['search', 'sortBy', 'selectCollections']);
            $this->resetPage();
        }
    }

    public function applyFilters()
    {
        $this->validate();
        $this->resetPage();
    }
    public function resetFilters()
    {
        $this->selectCollections = [];
        $this->search = '';
        $this->sortBy = 'newest';
        $this->resetErrorBag();
        $this->resetPage();
    }
    public function render()
    {
        $collections = ProductCollectionData::collect([]);
        $products = ProductData::collect([]);
        // early return
        if($this->getErrorBag()->isNotEmpty()){
            return view('livewire.product-catalog', compact('products', 'collections'));
        }

        $collectionsResult = Tag::query()->withType('collection')->withCount('products')->get();
        // $results = Product::paginate(2);
        $query = Product::query();
        
        if($this->search){
            $query->where('name', 'LIKE', "%{$this->search}%");
        }

        if(!empty($this->selectCollections)){
            $query->whereHas('tags', function($query){
                $query->whereIn('id', $this->selectCollections);
            });
        }

        switch ($this->sortBy) {
            case 'latest':
                $query->oldest();
                break;
            case 'priceAsc':
                $query->orderBy('price', 'asc');
                break;
            case 'priceDesc':
                $query->orderBy('price', 'desc');
                break;
            case 'newest':
                $query->latest();
                break;
            default:
                $query->latest();
                break;
        }

        $products = ProductData::collect(
            $query->paginate(9)
        );
        $collections = ProductCollectionData::collect($collectionsResult);

        return view('livewire.product-catalog', compact('products', 'collections'));
    }
}
