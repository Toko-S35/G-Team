<?php

namespace App\Models;

use CodeIgniter\Model;

class EkspedisiTokoModel extends Model
{
    protected $table      = 'transaksi_ke_toko';
    protected $primaryKey = 'id_transaksi';

    protected $allowedFields = ['tanggal', 'nama_toko', 'biaya_ekspedisi', 'keterangan', 'pesan', 'status'];
    protected $useTimestamps = true;
}
