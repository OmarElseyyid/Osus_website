<?php

namespace App\Validation;

use App\Models\UsersModel;

class UserRules
{
    public function validateUser(string $str, string $field, array $data): bool
    {
        $userModel = new UsersModel();
        $user = $userModel->where('username', 'admin')
        ->first();

        if (!$user) {
            return false;
        }
      
        return password_verify($data['password'], $user['password']);
    }
}