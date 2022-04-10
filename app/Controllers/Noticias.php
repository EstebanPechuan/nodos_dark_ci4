<?php

namespace App\Controllers;

class Noticias extends BaseController {

    public function index() {
        $data['contenido'] = 'noticias';
        $data['clase_header'] = 'header-scroll';
        $data['images'] = [
            [
                'educacion' => 'public/img/noticias/educacion1.jpg'
            ],
            [
                'red_federal' => 'public/img/noticias/red.jpg'
            ]
        ];
        return view('template', $data);
    }

    public function plantilla_noticias() {
        $data['contenido'] = 'noticias/plantilla_noticias';
        $data['clase_header'] = 'header-scroll';
        return view('template', $data);
    }


    // --- Futura noticia dinámica ---

    // public function noticia() {
    //     $data['contenido'] = 'noticias/noticia';
    //     $data['clase_header'] = 'header-scroll';
    //     $data['noticias'] = [
    //         [

    //         ],
    //     ];
    //     return view('template', $data);
    // }

    public function educacion() {
        $data['contenido'] = 'noticias/educacion';
        $data['clase_header'] = 'header-scroll';
        $data['images'] = [
            [
                'id' => 1,
                'url' => 'public/img/noticias/educacion1.jpg'
            ],
            [
                'id' => 2,
                'url' => 'public/img/noticias/educacion2.jpg'
            ],
            [
                'id' => 3,
                'url' => 'public/img/noticias/educacion3.jpg'
            ]
        ];
        return view('template', $data);
    }

    public function red_federal() {
        $data['contenido'] = 'noticias/red_federal';
        $data['clase_header'] = 'header-scroll';
        $data['images'] = [
            [
                'id' => 1,
                'url' => 'public/img/noticias/red_hero.jpg'
            ],
            // [
            //     'id' => 2,
            //     'url' => 'public/img/noticias/educacion2.jpg'
            // ],
            // [
            //     'id' => 3,
            //     'url' => 'public/img/noticias/educacion3.jpg'
            // ]
        ];
        return view('template', $data);
    }
}