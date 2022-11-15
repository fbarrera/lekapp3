<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddWorkSite extends Migration
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
            'workSiteName' => [
                'type'       => 'VARCHAR',
                'constraint' => '256',
            ],
            'workSiteAddressStreet' => [
                'type'       => 'VARCHAR',
                'constraint' => '256',
            ],
            'workSiteAddressDetail1' => [
                'type'       => 'VARCHAR',
                'constraint' => '256',
            ],
            'workSiteAddressDetail2' => [
                'type'       => 'VARCHAR',
                'constraint' => '256',
            ],
            'workSiteStartDate' => [
                'type'       => 'DATETIME',
                'null'     => true,
            ],
            'workSiteEndDate' => [
                'type'       => 'DATETIME',
                'null'     => true,
            ],
            'state_id' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'city_id' => [
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
        $this->forge->createTable('worksites');
    }

    public function down()
    {
        $this->forge->dropTable('worksites');
    }
}
