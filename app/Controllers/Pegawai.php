<?php

namespace App\Controllers;

use App\Models\PegawaiModel;
use CodeIgniter\Controller;

class Pegawai extends Controller
{
    public function index()
    {
        $model = new PegawaiModel();
        $data['pegawai'] = $model->findAll();

        return view('pegawai/index', $data);
    }

    public function create()
    {
        return view('pegawai/create');
    }

    public function store()
    {
        helper(['form', 'url']);

        $model = new PegawaiModel();

        $rules = [
            'nama' => 'required',
            'jabatan' => 'required',
            'foto' => [
                'uploaded[foto]',
                'mime_in[foto,image/jpg,image/jpeg]',
                'max_size[foto,300]'
            ]
        ];

        if (!$this->validate($rules)) {
            $data['validation'] = $this->validator;
            return view('pegawai/create', $data);
        } else {
            $foto = $this->request->getFile('foto');
            $newName = $foto->getRandomName();
            $foto->move(ROOTPATH . 'public/uploads', $newName);

            $data = [
                'nama' => $this->request->getVar('nama'),
                'jabatan' => $this->request->getVar('jabatan'),
                'foto' => $newName
            ];

            $model->save($data);

            session()->setFlashdata('success', 'Pegawai berhasil ditambahkan.');
            return redirect()->to('/pegawai');
        }
    }

    public function edit($id = null)
    {
        $model = new PegawaiModel();
        $data['pegawai'] = $model->find($id);

        if (empty($data['pegawai'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Pegawai dengan ID ' . $id . ' tidak ditemukan.');
        }

        return view('pegawai/edit', $data);
    }

    public function update()
    {
        helper(['form', 'url']);

        $model = new PegawaiModel();

        $id = $this->request->getVar('id');

        $rules = [
            'nama' => 'required',
            'jabatan' => 'required'
        ];

        if (!$this->validate($rules)) {
            $data['validation'] = $this->validator;
            $data['pegawai'] = $model->find($id);
            return view('pegawai/edit', $data);
        } else {
            $data = [
                'nama' => $this->request->getVar('nama'),
                'jabatan' => $this->request->getVar('jabatan')
            ];

            $model->update($id, $data);

            session()->setFlashdata('success', 'Data pegawai berhasil diperbarui.');
            return redirect()->to('/pegawai');
        }
    }

    public function delete($id = null)
    {
        $model = new PegawaiModel();
        $model->delete($id);

        session()->setFlashdata('success', 'Data pegawai berhasil dihapus.');
        return redirect()->to('/pegawai');
    }
}
