<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function __construct()
    {
        helper('form');
    }

    public function index()
    {
        $data['title'] = 'Users';
        return view('pages/v_users', $data);
    }

    public function add()
    {
        $data['title'] = 'Add User';
        return view('pages/v_add_user', $data);
    }
}
