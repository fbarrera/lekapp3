<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Cities extends Seeder
{
    public function run()
    {
        //Open what is in WRITEPATH . 'SQLSeeds/states.sql' line by line and execute it

        $sql = file(WRITEPATH . 'SQLSeeds/cities.sql');

        foreach ($sql as $query) {
            if (trim($query) != '') {
                $this->db->query($query);
            }
        }
    }
}
