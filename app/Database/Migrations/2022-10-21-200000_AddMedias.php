<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddMedias extends Migration
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
            'mediaName' => [
                'type'       => 'VARCHAR',
                'constraint' => '1024',
            ],
            'mediaExtension' => [
                'type'       => 'VARCHAR',
                'constraint' => '160',
            ],
            'mediaSize' => [
                'type'       => 'FLOAT',
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
        $this->forge->createTable('medias');

        //Seed the table with Roles Seeder

        $seeder = \Config\Database::seeder();
        $seeder->call('Medias');
    }

    public function down()
    {
        $this->forge->dropTable('medias');
    }
}
