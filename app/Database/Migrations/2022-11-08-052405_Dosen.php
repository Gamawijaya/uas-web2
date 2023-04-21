<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dosen extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_laptop'           => [
                'type'              => 'BIGINT',
                'constraint'        => 20,
                'unsigned'          => TRUE,
                'auto_increment'    => TRUE
            ],
            'nama_laptop'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '50',
            ],
            'merk_laptop'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '30',
            ],
            'spek'       => [
                'type'              => 'ENUM',
                'constraint'        => "'Core I3','Core I5','Core I7'",
                'default'           => 'Core I3'
            ],
        ]);
        $this->forge->addKey('id_laptop', TRUE);
        $this->forge->createTable('list_laptop');

        //
    }

    public function down()
    {
        //
    }
}
