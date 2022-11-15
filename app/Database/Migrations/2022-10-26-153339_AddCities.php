<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCities extends Migration
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
            'cityName' => [
                'type'       => 'VARCHAR',
                'constraint' => '64',
            ],
            'state_id' => [
                'type'       => 'INT',
                'constraint' => 11,
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
        $this->forge->createTable('cities');

        //Seed the table with Roles Seeder

        $seeder = \Config\Database::seeder();
        $seeder->call('Cities');
    }

    public function down()
    {
        $this->forge->dropTable('cities');
    }
}
