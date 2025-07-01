<?php
namespace App\Models;
use CodeIgniter\Model;

class GameModel extends Model
{
    protected $table = 'games'; // Nama tabel pengguna Anda
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'logo_url']; // Kolom yang diizinkan untuk diisi

    // Validation rules
    protected $validationRules = [
        'name' => 'required|min_length[3]|max_length[100]',
        'logo_url' => 'permit_empty|valid_url|max_length[255]',
        'is_active' => 'permit_empty|in_list[0,1]'
    ];
    
    protected $validationMessages = [
        'name' => [
            'required' => 'Nama game harus diisi',
            'min_length' => 'Nama game minimal 3 karakter',
            'max_length' => 'Nama game maksimal 100 karakter'
        ],
        'logo_url' => [
            'valid_url' => 'URL logo tidak valid',
            'max_length' => 'URL logo terlalu panjang'
        ]
    ];
}