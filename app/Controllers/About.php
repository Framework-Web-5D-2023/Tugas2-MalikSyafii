<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index(): string
    {
        $data = [
            "title" => "About Us",
            "nama" => "Malik Syafi'i",
            "kelas" => "3D",
            "email" => "maliksyafii426@gmail.com"
        ];

        return view('about', $data);
    }
}
