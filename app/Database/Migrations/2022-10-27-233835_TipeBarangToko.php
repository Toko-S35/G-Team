<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TipeBarangToko extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_tipe_barang_toko' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_tipe_barang' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'id_jenis_barang_toko' => [
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
        $this->forge->addKey('id_tipe_barang_toko', true);
        $this->forge->addForeignKey('id_tipe_barang', 'tipe_barang', 'id_tipe_barang', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_jenis_barang_toko', 'jenis_barang_toko', 'id_jenis_barang_toko', 'CASCADE', 'CASCADE');
        $this->forge->createTable('tipe_barang_toko');
    }

    public function down()
    {
        $this->forge->dropTable('tipe_barang_toko');
    }
}