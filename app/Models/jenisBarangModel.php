<?php

namespace App\Models;

use CodeIgniter\Model;

class jenisBarangModel extends Model
{
    protected $table      = 'jenis_barang';

    protected $allowedFields = ['nama_jenis_barang', 'harga_beli', 'harga_jual', 'banyak_barang', 'keterangan'];
    protected $useTimestamps = true;
}