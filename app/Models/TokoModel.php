<?php

namespace App\Models;

use CodeIgniter\Model;

class TokoModel extends Model
{
    protected $table      = 'toko';

    protected $allowedFields = ['tanggal', 'tujuan', 'jarak_tempuh', 'banyak_barang', 'detail_pengiriman', 'biaya_pengiriman'];
    protected $useTimestamps = true;
}