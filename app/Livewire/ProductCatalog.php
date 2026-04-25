<?php
declare(strict_types=1);
namespace App\Livewire;

use App\Models\Product;
use App\Models\Tag;
use App\Data\ProductCollectionData;
use App\Data\ProductData;
use Livewire\Component;
use Livewire\WithPagination;


class ProductCatalog extends Component
{
    use WithPagination;
    public array $selectCollections = [];
    public string $search = '';
    public string $sortBy = 'newest';

    public function applyFilters()
    {
        $this->resetPage();
    }
    public function render()
    {
        $collectionsResult = Tag::query()->withType('collection')->withCount('products')->get();
        // $results = Product::paginate(2);
        $query = Product::query();
        
        if($this->search){
            $query->where('name', 'LIKE', "%{$this->search}%");
        }

        $products = ProductData::collect(
            $query->paginate(9)
        );
        $collections = ProductCollectionData::collect($collectionsResult);

        return view('livewire.product-catalog', compact('products', 'collections'));
    }
}
