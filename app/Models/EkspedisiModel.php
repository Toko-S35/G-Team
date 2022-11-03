<?php

namespace App\Models;

use CodeIgniter\Model;

class EkspedisiModel extends Model
{
    protected $table      = 'transaksi_ke_gudang';
    protected $primaryKey = 'id_transaksi';

    protected $allowedFields = ['tanggal', 'asal_barang', 'biaya_ekspedisi', 'keterangan', 'nota'];
    protected $useTimestamps = true;
}