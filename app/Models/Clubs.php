<?php

namespace App\Models;

use CodeIgniter\Model;

class Clubs extends Model
{
    protected $table = 'clubs';
    protected $allowedFields = ['nama_club', 'email', 'manager', 'coach', 'wa', 'jumlah_atlet'];
        
    public function showClub() {
        $query = $this->db->table('clubs')->orderBy('nama_club', 'ASC')->get();
        return $query;
    }
}