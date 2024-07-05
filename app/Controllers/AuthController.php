<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth/login');
    }

    public function login()
    {
        // Proses login, validasi, dan otentikasi
    }

    public function logout()
    {
        // Proses logout
    }
}
