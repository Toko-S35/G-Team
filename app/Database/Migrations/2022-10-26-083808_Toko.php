<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Toko extends Migration
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
            'nama_toko' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
            ],
            'alamat_toko' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
            ],
            'nomor_telepon_toko' => [
                'type'       => 'VARCHAR',
                'constraint'     => 15,
            ],
            'nomor_telepon_kp_toko' => [
                'type'       => 'VARCHAR',
                'constraint'     => 15,
            ],
            'nama_kp_toko' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
            ],
            'email_kp_toko' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
            ],
            'username_kp_toko' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
            ],
            'password_kp_toko' => [
                'type'       => 'VARCHAR',
                'constraint'     => 255,
            ],
            'foto_kp_toko'         => [
                'type' => 'varchar',
                'constraint' => 355,
                'default' => "default.svg"
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
        $this->forge->createTable('toko');
    }

    public function down()
    {
        $this->forge->dropTable('toko');
    }
}