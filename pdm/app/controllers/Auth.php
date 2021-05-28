<?php

class Auth extends Controller{
    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('templates/header', $data);
        $this->view('login/index', $data);
        $this->view('templates/footer');
    }
}