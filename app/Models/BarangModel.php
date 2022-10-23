<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table      = 'barang';

    protected $allowedFields = ['harga_jual', 'tanggal', 'harga_modal', 'banyak_barang'];
    protected $useTimestamps = true;
}