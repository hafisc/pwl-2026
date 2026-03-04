<?php

namespace App\Http\Controllers;

use App\Models\Barang;

class ProductController extends Controller
{
    public function index(string $category)
    {
        $categoryMap = [
            'food-beverage' => 'FOOD',
            'beauty-health' => 'BEAUTY',
            'home-care' => 'HOME',
            'baby-kid' => 'BABY',
        ];

        abort_unless(array_key_exists($category, $categoryMap), 404);

        $kategoriKode = $categoryMap[$category];

        $products = Barang::query()
            ->with('kategori')
            ->whereHas('kategori', function ($query) use ($kategoriKode) {
                $query->where('kategori_kode', $kategoriKode);
            })
            ->orderBy('barang_nama')
            ->get();

        return view('products', [
            'category' => $category,
            'products' => $products,
        ]);
    }
}
