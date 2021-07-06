<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use App\Filters\AdminAuth;
use App\Models\UsersModel;

class Auth extends BaseController
{
    public function login()
    {
        $data = [];
		helper(['form']);
		if ($this->request->getMethod() == 'post') {
            $model = new UsersModel();
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $user = $model->where('username', $username)->where('password',$password)->first();
            if (!$user) {
                $data['validation'] = $this->validator;
            }
            else {
				$this->setUserSession($user);
				return redirect()->to('admin/dashboard');
			}
		}
		echo view('admin/login/index',$data);
    }
    public function logout()
    {
        $this->endUserSession();
        exit();
    }
    private function setUserSession($user)
	{
		$data = [
			'id' => $user['id'],
			'username'=> $user['username'],
			'logged_user'=> true,
		];
		session()->set($data);
		return true;
	}
    private function endUserSession()
	{
		$data = [
			'logged_user'=> false
		];
		session()->set($data);
		return true;
	}
    
}