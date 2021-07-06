<?php
namespace App\Controllers\Frontend;
use App\Controllers\BaseController;


class Pages extends BaseController
{
	public function index()
	{
		
	}

    function showme($page = 'home'){

        if (! is_file(APPPATH.'/Views/pages/'.$page.'.php')){
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        echo view('templates/header.php');
        echo view('pages/'.$page);
        echo view('templates/footer.php');
    } 
}
