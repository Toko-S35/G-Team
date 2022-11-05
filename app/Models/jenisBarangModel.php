<?php

namespace App\Models;

use CodeIgniter\Model;

class jenisBarangModel extends Model
{
    protected $table      = 'jenis_barang';
    protected $primaryKey = 'id_jenis_barang';
    protected $allowedFields = ['nama_jenis_barang', 'harga_beli', 'harga_jual', 'banyak_barang', 'keterangan','id_transaksi'];
    protected $useTimestamps = true;

    public function getJoin()
    {
        $query =  $this->db->table('jenis_barang')
            ->join('transaksi_ke_gudang', 'jenis_barang.id_transaksi = transaksi_ke_gudang.id_transaksi')
            ->get();
        return $query;
    }
}