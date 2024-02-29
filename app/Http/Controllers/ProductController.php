<?php

namespace App\Http\Controllers;

use App\Services\ProductService;

class ProductController extends Controller
{

    protected ProductService $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function listProducts()
    {
        return view('user.products', [
            'products' => $this->productService->allProducts()
        ]);
    }

    public function productByCategoryId($id)
    {
        return view('user.products', [
            'products' => $this->productService->productsByCategoryId($id)
        ]);
    }

    public function listNewProducts()
    {
        return view('user.products', [
            'products' => $this->productService->newProducts()
        ]);
    }

    public function listTopProducts()
    {
        return view('user.products', [
            'products' => $this->productService->topProducts()
        ]);
    }
}