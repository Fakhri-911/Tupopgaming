<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\GameModel;

class AdminGames extends BaseController
{
    protected $gameModel;
    
    public function __construct()
    {
        $this->gameModel = new GameModel();
        helper(['form', 'url']);
    }
    
    // Menampilkan form tambah game
    public function create()
    {
        $data = [
            'title' => 'Tambah Game Baru',
            'validation' => \Config\Services::validation()
        ];
        
        return view('main_content/GameForm', $data);
    }
    
    // Menyimpan data game
    public function store()
    {
        // Validasi input
        $rules = [
            'name' => 'required|min_length[3]|max_length[100]',
            'logo' => [
                'rules' => 'uploaded[logo]|max_size[logo,1024]|is_image[logo]|mime_in[logo,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih logo game terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar (Maks 1MB)',
                    'is_image' => 'File harus berupa gambar',
                    'mime_in' => 'Format gambar harus JPG/JPEG/PNG'
                ]
            ]
        ];
        
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput();
        }
        
        // Ambil file logo
        $logoFile = $this->request->getFile('logo');
        $logoName = $logoFile->getRandomName();
        
        // Pindahkan file ke folder public/assets/games
        $logoFile->move(ROOTPATH . 'public/asset/games', $logoName);
        
        // Simpan ke database
        $this->gameModel->save([
            'name' => $this->request->getPost('name'),
            'logo_url' => '/asset/games/' . $logoName
        ]);
        
        // Redirect dengan pesan sukses
        return redirect()->to('main_content/GameForm')->with('success', 'Game berhasil ditambahkan');
    }
}