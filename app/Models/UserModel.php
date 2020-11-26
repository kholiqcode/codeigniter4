<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table = 'users';
  protected $primaryKey = 'id';
  protected $returnType     = 'array';
  protected $useTimestamps = true;
  // protected $allowedFields = [
  //   'id', 'name', 'address', 'phone', 'username', 'email', 'password', 'photo', 'role_id', 'status', 'updated_by', 'updated_at', 'created_by', 'created_at'
  // ];
  protected $skipValidation = true;
  protected $validationRules = [
    'name' => 'required|min_length[3]|alpha_numeric_space',
    'address' => 'required|min_length[6]',
    'phone' => 'required|min_length[14]|alpha_numeric_space',
    'username' => 'required|min_length[6]|alpha_numeric_space',
    'email' => 'required|min_length[6]|valid_email',
    'password' => 'required|min_length[6]|alpha_numeric_space',
    'confirm_password' => 'required_with[password]|matches[password]|min_length[6]|alpha_numeric_space',
    'role_id' => 'required|alpha_numeric_space',
    'status' => 'required|alpha_numeric_space',
  ];
}
