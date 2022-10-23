<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ekspedisi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'tanggal' => [
                'type'       => 'DATE',
            ],
            'tujuan' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
            ],
            'jarak_tempuh' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'banyak_barang' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'detail_pengiriman' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
            ],
            'biaya_pengiriman' => [
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
        $this->forge->addKey('id', true);
        $this->forge->createTable('ekspedisi');
    }

    public function down()
    {
        $this->forge->dropTable('ekspedisi');
    }
}