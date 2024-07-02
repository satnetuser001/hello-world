<?php

namespace App\Controllers;

use App\Models\User;

class MainController
{
    protected $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        //The view cannot be autoloaded by the composer
        include 'Views/index.phtml';
    }
}