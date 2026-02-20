<?php

namespace App\Controllers;

use App\Controllers\BaseController;
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
        return view('admin/products');
    }

    public function customers()
    {
        return view('admin/customers');
    }
}
