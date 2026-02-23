<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Mapping slug ke nama kategori
    private array $categories = [
        'food-beverage'  => 'Food & Beverage',
        'beauty-health'  => 'Beauty & Health',
        'home-care'      => 'Home Care',
        'baby-kid'       => 'Baby & Kid',
    ];

    public function index(Request $request, string $sub)
    {
        $categoryName = $this->categories[$sub] ?? ucfirst(str_replace('-', ' ', $sub));
        return view('kasir.product.index', [
            'sub'          => $sub,
            'categoryName' => $categoryName,
            'categories'   => $this->categories,
        ]);
    }
}
