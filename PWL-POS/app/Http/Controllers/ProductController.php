<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index(string $category)
    {
        $allowedCategories = [
            'food-beverage',
            'beauty-health',
            'home-care',
            'baby-kid',
        ];

        abort_unless(in_array($category, $allowedCategories), 404);

        return view('products', [
            'category' => $category,
        ]);
    }
}
