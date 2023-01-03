<?php

namespace App\Models;

use CodeIgniter\Model;

use function PHPUnit\Framework\returnSelf;

class Clubs extends Model
{
    protected $table = 'clubs';
    protected $allowedFields = ['nama_club', 'email', 'manager', 'coach', 'wa', 'jumlah_atlet'];
        
    public function showClub() {
        $query = $this->db->table('clubs')->orderBy('nama_club', 'ASC')->get();
        return $query;
    }

    public function getTotalClub() {
        $query = $this->db->table('clubs')
            ->select('COUNT(*) as total')
            ->get();
        return $query->getFirstRow();
    }
}