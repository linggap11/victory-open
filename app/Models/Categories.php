<?php

namespace App\Models;

use CodeIgniter\Model;

class Categories extends Model
{
    protected $table = 'categories';
    protected $allowedFields = ['jenis', 'kategori', 'range1', 'range2'];

    public function showClassKyorugi() {
        $query = $this->db->table("categories")
            ->where('jenis', 'kyorugi')
            ->get();
        return $query;
    }

    public function showClassPoomsaeIndividu() {
        $query = $this->db->table("categories")
            ->where('jenis', 'individual')
            ->get();
        return $query;
    }

    public function showClassPoomsaePair() {
        $query = $this->db->table("categories")
            ->where('jenis', 'pair')
            ->get();
        return $query;
    }

    public function showClassPoomsaeGroup() {
        $query = $this->db->table("categories")
            ->where('jenis', 'beregu')
            ->get();
        return $query;
    }

    public function saveClass($data) {        
        $this->db->table('class_detail')->insert($data);        
    }

    public function saveInvoice($invoice, $id, $total) {
        $this->db->table('invoice')->insert([
            'invoice' => $invoice, 
            'tim' => $id,
            'total' => $total
        ]);
    }

}   

?>