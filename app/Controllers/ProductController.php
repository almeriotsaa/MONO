<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ProductController extends BaseController
{
    public function index()
    {
        return view('collection/detail');
    }

    // public function detail($id)
    // {
    //     $model = new ArticleModel();
    //     $data['article'] = $model->find($id);

    //     return view('articles/detail', $data);
    // }
}
