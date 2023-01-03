<?php

namespace App\Models;

use CodeIgniter\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['nama_lengkap', 'jk', 'tanggal_lahir', 'photo', 'tinggi_badan', 'berat_badan', 'kategori', 'kelas', 'akte', 'geup', 'club_id'];

    public function getTotalPoomsae() {
        $query = $this->db->table('users')
            ->select('COUNT(*) as total')
            ->where('berat_badan', NULL)
            ->get();
        return $query->getFirstRow();
    }

    public function getTotalKyourugi() {
        $query = $this->db->table('users')
            ->select('COUNT(*) as total')
            ->where('berat_badan !=', NULL)
            ->get();
        return $query->getFirstRow();
    }

}