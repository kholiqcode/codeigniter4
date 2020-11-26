<?php

namespace App\Controllers;

use Config\Services;

class Auth extends BaseController
{

	public function __construct()
	{
		helper('form');
	}

	public function index()
	{
		$request = $this->request->getPost();
		$data['title'] = 'Login';
		$data['data'] = $request;
		if (!$request) {
			return view('auth/v_login', $data);
		}
		$userModel = model('UserModel');
		if (!$this->validate($userModel->getValidationRules(['only' => ['email', 'password']]))) {
			return redirect()->to(base_url('auth/login'))->with('error', $this->validator->getErrors());
		}
		// dd($request['email']);
		$user = $userModel->where('email', $request['email'])->first();
		if(!$user) return redirect()->to(base_url('auth/login'))->with('error', 'Akun anda belum terdaftar');
		if (password_verify($request['password'], $user['password'])) {
			session()->set('is_logged', 1);
			return redirect()->to(base_url('admin'));
		}
		return view('auth/v_login', $data);
	}

	public function logout()
	{
		session()->destroy();
		return redirect()->to(base_url('auth/login'));
	}
}
