<?php

namespace App\Services;

use App\Models\Product;

class ProductDetailService
{
    public function productDetailById($productId) {
        return Product::find($productId);
    }
}