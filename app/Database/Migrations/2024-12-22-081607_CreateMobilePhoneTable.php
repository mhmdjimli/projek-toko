<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMobilephonesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
        'id' => [
            'type'=> 'INT',
            'constraint' => 11,
            'auto_increment' => true,
        ],
        'nama' => [
            'type' => 'VARCHAR',
            'constraint' => 225,
        ],
        'merek' => [
            'type' => 'VARCHAR',
            'constraint' => 225,
        ],
        'spesifikasi' => [
            'type' => 'VARCHAR',
            'constraint' => 225,
        ],
        'tahun_rilis' => [
            'type' => 'INT',
            'constraint' => 5,
        ],
        'gambar' => [
            'type' => 'VARCHAR',
            'constraint' => 250,
        ],
        'harga' => [
            'type' => 'INT',
            'constraint' => 16,
        ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('mobilephones');
    }

    public function down()
    {
        $this->forge->dropTable('mobilephones');
    }
}
