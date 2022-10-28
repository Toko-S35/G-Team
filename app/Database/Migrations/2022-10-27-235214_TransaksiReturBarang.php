<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TransaksiReturBarang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_transaksi' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_toko' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'keterangan' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'biaya_ekspedisi' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'id_jenis_barang_toko' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'id_tipe_barang_toko' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'banyak_barang' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],

        ]);
        $this->forge->addKey('id_transaksi', true);
        $this->forge->addForeignKey('id_jenis_barang_toko', 'jenis_barang_toko', 'id_jenis_barang_toko', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_tipe_barang_toko', 'tipe_barang_toko', 'id_tipe_barang_toko', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_toko', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('transaksi_retur_barang');
    }

    public function down()
    {
        $this->forge->dropTable('transaksi_retur_barang');
    }
}