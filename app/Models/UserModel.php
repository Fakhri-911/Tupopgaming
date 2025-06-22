<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Nama tabel pengguna Anda
    protected $primaryKey = 'id';
    protected $allowedFields = ['email', 'password']; // Kolom yang diizinkan untuk diisi

    // Metode untuk mencari pengguna berdasarkan email
    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }
}