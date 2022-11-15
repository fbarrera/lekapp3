<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUserRoles extends Migration
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
            'user_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'  => true,
            ],
            'role_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'  => true,
            ],
            'workSite_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'  => true,
                'null' => true,
            ],
            'speciality_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'  => true,
                'null' => true,
            ],
            'specialityRole_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'  => true,
                'null' => true,
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
        $this->forge->createTable('userroles');

        //Seed the table with Users Seeder

        $seeder = \Config\Database::seeder();
        $seeder->call('UserRoles');
    }

    public function down()
    {
        $this->forge->dropTable('userroles');
    }
}
