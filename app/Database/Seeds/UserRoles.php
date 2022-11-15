<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserRoles extends Seeder
{
    public function run()
    {

        try {

            $mediaModel = new \App\Models\MediaModel;
            $userModel = new \App\Models\UserModel;
            $roleModel = new \App\Models\RoleModel;

            $avatar = $mediaModel
                ->where('mediaName', 'avatar')
                ->where('mediaExtension', 'png')
                ->first();

            if ($avatar) {
                $data = [
                    [
                        'avatar_id' => $avatar->id,
                        'userEmail' => 'francisco.barrera.gil@gmail.com',
                        'userPassword' => password_hash('123456', PASSWORD_DEFAULT),
                        'userDNI' => '12345678',
                        'userFirstName' => 'Francisco',
                        'userLastName' => 'Barrera',
                    ],
                ];
                
                foreach ($data as $user) {
                    $userModel->insert($user);
                }
            } else {
                throw new \Exception('No se ha encontrado el avatar');
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

        $role = $roleModel
            ->where('roleName', 'Maestro')
            ->first();

        if ($role) {
            $userId = $userModel->getInsertID();

            $userRoleModel = new \App\Models\UserRoleModel;

            $userRoleModel->insert([
                'user_id' => $userId,
                'role_id' => $role->id,
                'constructionSite_id' => null,
            ]);

        } else {
            throw new \Exception('No se ha encontrado el rol');
        }

    }
}
