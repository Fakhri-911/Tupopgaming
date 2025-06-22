<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Database;
use CodeIgniter\Database\ConnectionInterface;

class TestDB extends Controller
{
    public function index()
    {
        try {
            $db = Database::connect();
            
            // Cara yang lebih baik untuk mengecek koneksi
            if ($db->connect()) {
                echo "✅ Koneksi database berhasil!";
                
                // Informasi tambahan yang berguna
                echo "<br>Database Driver: " . $db->getPlatform();
                echo "<br>Database Name: " . $db->getDatabase();
            } else {
                echo "❌ Gagal terhubung ke database";
            }
        } catch (\Throwable $e) {
            echo "❌ Error koneksi: " . $e->getMessage();
            
            // Untuk debugging lebih detail (jangan di production)
            if (ENVIRONMENT !== 'production') {
                echo "<pre>";
                print_r($e->getTrace());
                echo "</pre>";
            }
        }
    }
}   