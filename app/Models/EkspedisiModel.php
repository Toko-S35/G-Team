<?php

namespace App\Models;

use CodeIgniter\Model;

class EkspedisiModel extends Model
{
    protected $table      = 'ekspedisi';

    protected $allowedFields = ['tanggal', 'tujuan', 'jarak_tempuh', 'banyak_barang', 'detail_pengiriman', 'biaya_pengiriman'];
    protected $useTimestamps = true;
}