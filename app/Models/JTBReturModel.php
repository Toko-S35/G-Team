<?php

namespace App\Models;

use CodeIgniter\Model;

class JTBReturModel extends Model
{
    protected $table      = 'jtb_retur';
    protected $primaryKey = 'id_jtb_retur';

    protected $allowedFields = ['id_transaksi', 'jenis_barang', 'tipe_barang', 'banyak_barang'];
    protected $useTimestamps = true;
}
