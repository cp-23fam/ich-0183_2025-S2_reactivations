<?php

namespace App\Controllers;

class HomeController
{
    public function __construct() {}

    public function index()
    {
        echo "Home";
    }

    public function view()
    {
        echo "Home with id " . $_GET['id'];
    }
}
