<?php  namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{

    protected $table      = 'useraccount';
    protected $allowedFields = ['name','surename','age','email','phone_number','username','password'];
    protected $beforeInsert = ['beforInsert'];
    protected $beforeUpdate = ['beforUpdate'];

    protected function beforeInsert(array $data)
    {
       return $data;
    }

    protected function beforeInbeforeUpdatesert(array $data)
    {
        return $data;
    }

   /* protected $table      = 'useraccount';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['name','surename','age','email','phone_number','username','password'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    
    protected $validationRules    = [
        'name' => 'required|string',
        'surename' => 'required|string',
        'age' => 'required',
        'email' => 'required|valid_email|is_unique[useraccount.Email]',
        'phone_number' => 'required|numeric|min_lenght[10]|max_lenght[11]|is_unique[useraccount.Phone_number]',
        'username' => 'required|min_lenght[3]',
        'password' => 'required|min_lenght[6]'
    ];
    protected $validationMessages = [
        'name' => [
            'required'=> 'Name is required',
            'string'  => 'Make sure your name is in currect format'       
        ],

        'surename' =>[
            'required'=> 'Surename is required', 
            'string'=> 'Make sure your surename is in currect format'
        ], 

        'age' => ['required' => 'Age is required'],

        'email' => ['required'=> 'Email is required' ,
        'valid_email'=> 'Your email is unvalid' ,
        'is_unique'=> 'This email has been used befor'
        ],

        'phone_number' => ['required'=> 'Your Phone number is required' ,
        'numeric' =>'Phone number shuld contain numbers only',
        'min_lenght' =>'Phone number should not be less than 10 number',
        'max_lenght' =>'Phone number should not be more than 11 number',
        'is_unique' =>'This phone number has been used befor'
        ],
        
        'username' => ['required' =>'Username required',
        'min_lenght' =>'Username shloud be more than 3 characters'
        ],
       
        'password' => ['required' =>'Password required',
        'min_lenght' =>'Password should be more than 3 characters'
        ]

    ];
    protected $skipValidation     = false;*/

}
