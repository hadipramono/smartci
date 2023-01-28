<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = "Welcome to SmartCI";

        service('SmartyEngine')->view('welcome_message', $data);
    }
}
