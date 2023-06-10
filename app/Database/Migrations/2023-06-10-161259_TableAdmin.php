<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableAdmin extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '25'
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '25'
            ],
            'password' => [
                'type' => 'TEXT'
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tb_admin');
    }

    public function down()
    {
        //
        $this->forge->dropTable('tb_admin');
    }
}
