<?php

namespace App\Controllers;

use App\Models\Categories;
use App\Models\Users;
use App\Models\Clubs;

class Auth extends BaseController
{   
    protected $userModel = "";
    protected $clubModel = "";
    protected $categoryModel = "";   

    public function __construct()
    {
        $this->userModel = new Users();
        $this->clubModel = new Clubs();
        $this->categoryModel = new Categories();
        if (is_null(session()->get('user_id'))) {
            return view('login');    
        } else {
            return redirect()->to(base_url('/admin/dashboard'));
        }
    }

    public function login() {
        if (is_null(session()->get('user_id'))) {
            return view('login');    
        } else {
            return redirect()->to(base_url('/admin/dashboard'));
        }
        
    }

    public function loginProcess() {
        $keyname = trim($this->request->getVar('keyname'));
        
        switch($keyname) {
            case "zahra" : 
                    $params = [
                        'user_id' => "zahra",
                    ];
                    session()->set($params);  
                    return redirect()->to(base_url('/admin/dashboard')); 
                break;
            case "bunda" : 
                    $params = [
                        'user_id' => "bunda",
                    ];
                    session()->set($params); 
                    return redirect()->to(base_url('/admin/dashboard'));
                break;
            case "rara" : 
                    $params = [
                        'user_id' => "rara",
                    ];
                    session()->set($params); 
                    return redirect()->to(base_url('/admin/dashboard'));
                break;
            default: 
                return redirect()->to(base_url('/admin'))->with('error', 'keyname salah/typo!');
                break;
        }
        
    }

    public function logout() {
        $data = array(
            'user_id'
        );
        session()->remove($data);
        
        return redirect()->to(base_url('/admin'));
    }

    public function dashboard() {
        return view('/admin/dashboard');
    }

}