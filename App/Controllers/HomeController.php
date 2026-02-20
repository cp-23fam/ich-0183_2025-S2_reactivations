<?php

namespace App\Controllers;

use App\Models\Friend;

class HomeController extends AppController
{
    public function index()
    {
        $this->view['friends']  = Friend::getAll();
    }

    public function view()
    {
        $friend = Friend::find($_GET['id']);
    }
}
