<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Collection;

class ProductService
{
    public function topProducts() {
        // list product query to fetch products based on quantity sold in the last three months by the current user
        $threeMonthsAgo = now()->subMonths(3);
        return Product::select('products.*')
            ->withSum('order_details as total_quantity', 'quantity') // Eager loading total quantity
            ->whereHas('order_details.order', function (Builder $query) use ($threeMonthsAgo) {
                $query->where('created_at', '>=', $threeMonthsAgo);
            })
            ->orderByDesc('total_quantity')
            ->take(4)
            ->get();
    }

    public function newProducts() {
        // list product query to fetch products and sort them by creation date
        return Product::orderBy('created_at', 'desc')
            ->take(8)
            ->get();
    }

    public function allProducts(): Collection
    {
        // list all product
        return Product::paginate(10);
    }

    public function productsByCategoryId($categoryId)
    {
        // list products for category
        try {
            $category = Category::findOrFail($categoryId);
            return $category->products;
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }
}