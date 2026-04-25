<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DummyProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = ['ebook', 'course', 'filament', 'web programming', 'laravel'];
        $images = [
            storage_path('app/public/4/01KPW8KEVJA0ZKF113ACE4B4EP.png'),
            storage_path('app/public/5/01KPW8KF5TRP814Z21JYVWK6WT.png'),
            storage_path('app/public/6/01KPW94857GV9N6D5N3Y9NASF4.jpg'),
            storage_path('app/public/7/01KPW948GGSX52ZC5B4D8C8X0F.png'),
            storage_path('app/public/8/01KPW948TY05H0HXNEJSAHB11R.png'),
            storage_path('app/public/9/01KPW9495TBYQMTNNFNZAWN3XC.png'),
            storage_path('app/public/10/01KPW949FZE7PBWFRGVCH9YWHF.png'),
            storage_path('app/public/11/01KPYKQ12MHPNC73RYJ7AAEMKW.jpg'),
        ];

        Product::factory()->count(50)->create()->each(function (Product $product) use ($tags, $images) {
            $randomTags = (array) array_rand(array_flip($tags), rand(1, 3));
            $product->syncTagsWithType($randomTags, 'collection');

            $randomImage = $images[array_rand($images)];
            if (file_exists($randomImage)) {
                $product->addMedia($randomImage)->preservingOriginal()->toMediaCollection('cover');
            }
        });
    }
}

