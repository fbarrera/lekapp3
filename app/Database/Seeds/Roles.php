<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Roles extends Seeder
{
    public function run()
    {
        $roleModel = new \App\Models\RoleModel;

        $data = [
            'Maestro',
            'Administrador',
            'Programador',
            'Cliente',
            'Mandante',
            'Supervisor',
            'Trabajador',
            'Externo',
        ];

        foreach ($data as $role) {
            $roleModel->insert([
                'roleName' => $role,
            ]);
        }
        
    }
}
