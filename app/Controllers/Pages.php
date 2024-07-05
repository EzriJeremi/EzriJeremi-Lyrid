<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function login()
    {
        $data = [
            'title' => 'Login | Lyrid'
        ];
        return view('pages/login', $data);
    }


    public function index()
    {
        $data = [
            'title' => 'Home | Lyrid'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. oke gas No.02',
                    'kota' => 'konoha'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. aja dulu, jadian kagak',
                    'kota' => 'Halu'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
