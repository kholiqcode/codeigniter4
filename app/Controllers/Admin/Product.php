<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Product extends BaseController
{
    public function __construct()
    {
        helper('form');
    }

    public function index()
    {
        $data['title'] = 'Products';
        return view('pages/v_products', $data);
    }

    public function add()
    {
        $data['title'] = 'Add Product';
        return view('pages/v_add_product', $data);
    }
}
