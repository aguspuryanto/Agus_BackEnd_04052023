<?php

namespace App\Controllers;

class Home extends BaseController
{
    public $session;

    public function __construct()
    {
        $this->session = session();
    }

    public function index()
    {
        //cek apakah ada session bernama isLogin
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }

        return view('welcome_message');
    }
}
