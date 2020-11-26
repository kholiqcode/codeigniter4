<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Orders extends BaseController
{
    public function index()
    {
        $data['title'] = 'Orders';
        return view('pages/v_orders',$data);
    }
}
