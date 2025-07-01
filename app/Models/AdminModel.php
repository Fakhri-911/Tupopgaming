<?php
namespace App\Models;
use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admins'; // Nama tabel admin Anda
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password_hash']; // Kolom yang diizinkan untuk diisi

    // Metode untuk mencari admin berdasarkan username
    public function getAdminByUsername($username)
    {
        return $this->where('username', $username)->first();
    }
}