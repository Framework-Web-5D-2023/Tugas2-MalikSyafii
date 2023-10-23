<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            "title" => "Home",
            "nama" => "Malik Syafi'i"
        ];

        return view('home', $data);
    }
}
