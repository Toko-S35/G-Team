<?php

namespace App\Models;

use CodeIgniter\Model;

class EkspedisiReturModel extends Model
{
    protected $table      = 'transaksi_retur_barang';
    protected $primaryKey = 'id_transaksi';

    protected $allowedFields = ['data', 'tanggal', 'biaya_ekspedisi', 'keterangan', 'status'];
    protected $useTimestamps = true;
}
