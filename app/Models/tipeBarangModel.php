<?php

namespace App\Models;

use CodeIgniter\Model;

class tipeBarangModel extends Model
{
    protected $table      = 'tipe_barang';

    protected $allowedFields = ['nama_tipe_barang', 'banyak_barang', 'id_jenis_barang'];
    protected $useTimestamps = true;
}