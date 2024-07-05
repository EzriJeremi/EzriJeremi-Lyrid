<?php

namespace App\Controllers;

use App\Models\UsersModel;
use CodeIgniter\Controller;

class Users extends Controller
{
    public function index()
    {
        $model = new UsersModel();
        $data['users'] = $model->findAll();

        return view('users/index', $data);
    }

    public function create()
    {
        return view('users/create');
    }

    public function store()
    {
        helper(['form', 'url']);

        $model = new UsersModel();

        $rules = $model->validationRules;

        if (!$this->validate($rules)) {
            $data['validation'] = $this->validator;
            return view('users/create', $data);
        } else {
            $data = [
                'username' => $this->request->getVar('username'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ];

            $model->save($data);

            session()->setFlashdata('success', 'User berhasil ditambahkan.');
            return redirect()->to('/users');
        }
    }

    public function edit($id = null)
    {
        $model = new UsersModel();
        $data['user'] = $model->find($id);

        if (empty($data['user'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('User dengan ID ' . $id . ' tidak ditemukan.');
        }

        return view('users/edit', $data);
    }

    public function update()
    {
        helper(['form', 'url']);

        $model = new UsersModel();

        $id = $this->request->getVar('id');

        $rules = [
            'username' => 'required|alpha_numeric_space|min_length[3]|max_length[255]|is_unique[users.username,id,' . $id . ']',
            'email'    => 'required|valid_email|is_unique[users.email,id,' . $id . ']',
        ];

        // Jika password tidak kosong, tambahkan validasi password
        if (!empty($this->request->getVar('password'))) {
            $rules['password'] = 'required|min_length[8]';
        }

        if (!$this->validate($rules)) {
            $data['validation'] = $this->validator;
            $data['user'] = $model->find($id);
            return view('users/edit', $data);
        } else {
            $data = [
                'username' => $this->request->getVar('username'),
                'email'    => $this->request->getVar('email'),
            ];

            // Jika password tidak kosong, update password
            if (!empty($this->request->getVar('password'))) {
                $data['password'] = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
            }

            $model->update($id, $data);

            session()->setFlashdata('success', 'Data user berhasil diperbarui.');
            return redirect()->to('/users');
        }
    }

    public function delete($id = null)
    {
        $model = new UsersModel();
        $model->delete($id);

        session()->setFlashdata('success', 'User berhasil dihapus.');
        return redirect()->to('/users');
    }
}
