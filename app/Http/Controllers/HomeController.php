<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\ProductService;

class HomeController extends Controller
{
    protected ProductService $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        return view('index', [
            'topProducts' => $this->productService->topProducts(),
            'newProducts' => $this->productService->newProducts()
        ]);
    }
}