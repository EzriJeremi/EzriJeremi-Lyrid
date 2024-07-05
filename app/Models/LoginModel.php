<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = "akun";
    protected $primaryKey = "email";
    protected $allowedFields = ['username', 'password', 'nama_lengkap', 'token'];

    // ambil data

    public function getData($parameter)
    {
        $builder = $this->table($this->table);
        $builder->where('username=', $parameter);
        $builder->orWhere('email=', $parameter);
        $query = $builder->get();
        return $query->getRowArray();
    }

    // simpan update data

    public function updateData($data)
    {
        $builder = $this->table($this->table);
        if ($builder->save($data)) {
            return true;
        } else {
            return false;
        }
    }
}
