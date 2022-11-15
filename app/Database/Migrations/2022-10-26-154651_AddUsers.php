<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUsers extends Migration
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
            'avatar_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'userEmail' => [
                'type'       => 'VARCHAR',
                'constraint' => '512',
            ],
            'userPassword' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'userDNI' => [
                'type'       => 'VARCHAR',
                'constraint' => '12',
            ],
            'userFirstName' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'userLastName' => [
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
        $this->forge->createTable('users');

    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
