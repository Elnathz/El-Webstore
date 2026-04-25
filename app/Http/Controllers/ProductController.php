<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Data\ProductData;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        $product = ProductData::fromModel($product, true);
        return view('product.show', compact('product'));
    }
}
