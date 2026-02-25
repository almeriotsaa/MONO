<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\IdModels\ProductModel;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/login');
    }

    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function orders()
    {
        return view('admin/orders');
    }

    public function products()
    {
        $model = new ProductModel();
        $data['products'] = $model->findAll();

        return view('admin/products', $data);
    }

    public function store()
    {
        $model = new ProductModel();

        $file = $this->request->getFile('image');
        $imageName = '';

        if ($file && $file->isValid()) {
            $imageName = $file->getRandomName();
            $file->move('uploads/products/', $imageName);
        }

        $model->save([
            'category_id'  => $this->request->getPost('category_id'),
            'name_product' => $this->request->getPost('name_product'),
            'description'  => $this->request->getPost('description'),
            'price'        => $this->request->getPost('price'),
            'stock'        => $this->request->getPost('stock'),
            'size'         => $this->request->getPost('size'),
            'image'        => $imageName,
        ]);

        return redirect()->to('/admin/products')
            ->with('success', 'Product berhasil ditambahkan');
    }

    public function customers()
    {
        return view('admin/customers');
    }
}
