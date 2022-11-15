<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Medias extends Seeder
{
    public function run()
    {
        $mediaModel = new \App\Models\MediaModel;

        $data = [
            (object)[
                'mediaName' => 'avatar',
                'mediaExtension' => 'png',
                'mediaSize' => '59',
            ]
        ];

        foreach ($data as $media) {
            $mediaModel->insert($media);
        }
    }
}
