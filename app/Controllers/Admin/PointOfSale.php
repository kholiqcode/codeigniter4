<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class PointOfSale extends BaseController
{
    public function index()
    {
        $data['title'] = 'Point Of Sale';
        return view('pages/v_pos',$data);
    }
}
