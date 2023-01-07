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

    public function getPesertaBaru() {
        $query = $this->db->table('users')            
            ->join('clubs', 'clubs.id = users.club_id')
            ->orderBy('users.id', 'DESC')->get(); 
        return $query;
    }

    public function getDataPoomsaeIndividu() {
        $query = $this->db->table('users')    
            ->select('users.nama_lengkap, users.jk, users.tanggal_lahir, clubs.nama_club, categories.jenis, categories.kategori')        
            ->join('clubs', 'clubs.id = users.club_id')
            ->join('class_detail', 'class_detail.user_1 = users.id')
            ->join('categories', 'categories.id = class_detail.category_id')
            ->where('categories.jenis', 'individual')
            ->orderBy('clubs.id', 'ASC')->get(); 
        return $query;
    }

    public function getDataPoomsaePair() {
        $query = $this->db->table('users as u1')                 
            ->select('u1.nama_lengkap as user1, u1.jk as jk1, u2.nama_lengkap as user2, u2.jk as jk2, u1.tanggal_lahir as tl1, u2.tanggal_lahir as tl2, clubs.nama_club, categories.jenis, categories.kategori')               
            ->join('class_detail', 'class_detail.user_1 = u1.id')
            ->join('users as u2', 'class_detail.user_2 = u2.id')
            ->join('clubs', 'clubs.id = u1.club_id')
            ->join('categories', 'categories.id = class_detail.category_id')
            ->where('categories.jenis', 'pair')
            ->orderBy('clubs.id', 'ASC')->get(); 
        return $query;
    }

    public function getDataPoomsaeGrup() {
        $query = $this->db->table('users as u1')                 
            ->select('u1.nama_lengkap as user1, u1.jk as jk1, u2.nama_lengkap as user2, u2.jk as jk2, u3.nama_lengkap as user3, u3.jk as jk3, u1.tanggal_lahir as tl1, u2.tanggal_lahir as tl2, u3.tanggal_lahir as tl3, clubs.nama_club, categories.jenis, categories.kategori')                      
            ->join('class_detail', 'class_detail.user_1 = u1.id')
            ->join('users as u2', 'class_detail.user_2 = u2.id')
            ->join('users as u3', 'class_detail.user_3 = u3.id')
            ->join('clubs', 'clubs.id = u1.club_id')
            ->join('categories', 'categories.id = class_detail.category_id')
            ->where('categories.jenis', 'beregu')
            ->orderBy('clubs.id', 'ASC')->get();          
        return $query;
    }

    public function getDataKyourugiPutra() {
        $query = $this->db->table('users')    
            ->select('users.id, users.nama_lengkap, users.jk, users.berat_badan, users.tanggal_lahir, clubs.nama_club, categories.jenis, categories.kategori, categories.id as kategori_id')        
            ->join('clubs', 'clubs.id = users.club_id')
            ->join('class_detail', 'class_detail.user_1 = users.id')
            ->join('categories', 'categories.id = class_detail.category_id')
            ->where('categories.jenis', 'kyorugi')
            ->where('users.jk', 'PUTRA')
            ->orderBy('clubs.id', 'ASC')->get(); 
        return $query;
    }

    public function getDataKyourugiPutri() {
        $query = $this->db->table('users')    
            ->select('users.id, users.nama_lengkap, users.jk, users.berat_badan, users.tanggal_lahir, clubs.nama_club, categories.jenis, categories.kategori, categories.id as kategori_id')        
            ->join('clubs', 'clubs.id = users.club_id')
            ->join('class_detail', 'class_detail.user_1 = users.id')
            ->join('categories', 'categories.id = class_detail.category_id')
            ->where('categories.jenis', 'kyorugi')
            ->where('users.jk', 'PUTRI')
            ->orderBy('clubs.id', 'ASC')->get(); 
        return $query;
    }

}