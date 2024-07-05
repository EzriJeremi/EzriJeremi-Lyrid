<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class PegawaiController extends Controller
{
    public function index()
    {
        // Menampilkan daftar pegawai
    }

    public function create()
    {
        // Form untuk menambahkan pegawai
    }

    public function store()
    {
        // Menyimpan data pegawai baru, termasuk upload foto
    }

    public function edit($id)
    {
        // Form untuk mengedit pegawai berdasarkan $id
    }

    public function update($id)
    {
        // Memperbarui data pegawai berdasarkan $id, termasuk update foto jika ada
    }

    public function delete($id)
    {
        // Menghapus pegawai berdasarkan $id
    }
}
