<?php

namespace App\Models;

use CodeIgniter\Model;

class EkspedisiModel extends Model
{
    protected $table      = 'transaksi_ke_gudang';

    protected $allowedFields = ['tanggal', 'tujuan', 'jarak_tempuh', 'banyak_barang', 'detail_pengiriman', 'biaya_pengiriman'];
    protected $useTimestamps = true;
}