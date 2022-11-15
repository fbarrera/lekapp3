<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddRoles extends Migration
{
    protected $DBGroup = 'default';
    
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'roleName' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('roles');

        //Seed the table with Roles Seeder

        $seeder = \Config\Database::seeder();
        $seeder->call('Roles');
    }

    public function down()
    {
        $this->forge->dropTable('roles');
    }
}
