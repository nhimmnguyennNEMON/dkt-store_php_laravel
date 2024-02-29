<?php

namespace App\Http\Controllers;

use App\Services\ProductDetailService;

class ProductDetailController extends Controller
{
    protected ProductDetailService $productDetailService;

    public function __construct(ProductDetailService $productDetailService)
    {
        $this->productDetailService = $productDetailService;
    }

    public function productDetail($productId)
    {
        return view('user.productDetail', [
            'product' => $this->productDetailService->productDetailById($productId)
        ]);
    }
}