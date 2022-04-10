<?php

namespace App\Controllers;

class Servicios extends BaseController {

    public function index() {
        $data['tecnologias'] = [
            [
                'name' => 'Bizagi',
                'img_url' => 'bizagi.svg'
            ],
            [
                'name' => 'Figma',
                'img_url' => 'figma.svg'
            ],
            [
                'name' => 'Illustrator',
                'img_url' => 'illustrator.svg'
            ],
            [
                'name' => 'Photoshop',
                'img_url' => 'photoshop.svg'
            ],
            [
                'name' => 'Adobe XD',
                'img_url' => 'adobe-xd.svg'
            ],
            [
                'name' => 'Miro',
                'img_url' => 'miro.svg'
            ],
            [
                'name' => 'Pencil Project',
                'img_url' => 'pencil-project.svg'
            ]
        ];
        
        $data['contenido'] = 'servicios';
        $data['clase_header'] = 'header-scroll';
        return view('template', $data);
    }

}