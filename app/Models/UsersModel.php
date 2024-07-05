<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users'; // Nama tabel di database
    protected $primaryKey     = 'id';
    protected $allowedFields  = [
        'email', 'username', 'password_hash', 'reset_hash', 'reset_at', 'reset_expires', 'activate_hash',
        'status', 'status_message', 'active', 'force_pass_reset', 'permissions', 'deleted_at',
    ];

    protected $useTimestamps = true; // Aktifkan penggunaan timestamps

    protected $createdField  = 'created_at'; // Nama kolom created_at
    protected $updatedField  = 'updated_at'; // Nama kolom updated_at
    protected $deletedField  = 'deleted_at'; // Nama kolom deleted_at

    protected $validationRules = [
        'email'         => 'required|valid_email|is_unique[users.email,id,{id}]',
        'username'      => 'required|alpha_numeric_punct|min_length[3]|max_length[30]|is_unique[users.username,id,{id}]',
        'password_hash' => 'required',
    ];


    protected $validationMessages = [
        'username' => [
            'is_unique' => 'Username sudah digunakan.'
        ],
        'email' => [
            'is_unique' => 'Email sudah digunakan.'
        ]
    ];
}
