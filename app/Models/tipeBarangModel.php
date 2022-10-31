<?php

namespace App\Models;

use CodeIgniter\Model;

class tipeBarangModel extends Model
{
    protected $table      = 'tipe_barang';
    protected $primaryKey = 'id_tipe_barang';
    protected $allowedFields = ['nama_tipe_barang', 'banyak_barang_tipe', 'id_jenis_barang'];
    protected $useTimestamps = true;

    public function getJoin()
    {
        $query =  $this->db->table('tipe_barang')
            ->join('jenis_barang', 'tipe_barang.id_jenis_barang = jenis_barang.id_jenis_barang')
            ->get();
        return $query;
    }
}