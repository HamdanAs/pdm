<?php

class Auth_model{
    private $table = "";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
}