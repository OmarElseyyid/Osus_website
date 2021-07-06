<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AdminAuth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session()->get('logged_user');
        if (!$session) {
            return redirect()->route('admin.login');
        }  

    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {

    }
}