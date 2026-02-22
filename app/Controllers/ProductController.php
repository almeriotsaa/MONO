<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\IdModels\ProductModel;

class ProductController extends BaseController
{
    protected $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    // Route: GET /  → Home
    public function home()
    {
        $data['newArrivals'] = $this->productModel
            ->orderBy('product_id', 'DESC')
            ->findAll(4);

        return view('index', $data); // pastikan nama view-nya benar
    }

    // Route: GET /collection  → Semua Produk
    public function index()
    {
        $data['products'] = $this->productModel
            ->orderBy('product_id', 'DESC')
            ->findAll();

        return view('collection/collection', $data);
    }

    // Route: GET /detail/(:num)  → Detail Produk
    public function detail($id = null)
    {
        $data['product']        = $this->productModel->find($id);
        $data['latestProducts'] = $this->productModel
            ->orderBy('product_id', 'DESC')
            ->findAll(4);

        return view('collection/detail', $data);
    }
}

