<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JenisBarangToko extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_jenis_barang_toko' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_jenis_barang' => [
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
        $this->forge->addKey('id_jenis_barang_toko', true);
        $this->forge->addForeignKey('id_jenis_barang', 'jenis_barang', 'id_jenis_barang', 'CASCADE', 'CASCADE');
        $this->forge->createTable('jenis_barang_toko');
    }

    public function down()
    {
        $this->forge->dropTable('jenis_barang_toko');
    }
}