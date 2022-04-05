<?php

namespace App\Controllers;

class Noticias extends BaseController {

    public function index() {
        $data['contenido'] = 'noticias';
        $data['clase_header'] = 'header-scroll';
        return view('template', $data);
    }

    public function plantilla_noticias() {
        $data['contenido'] = 'plantillas/plantilla_noticias';
        $data['clase_header'] = 'header-scroll';
        return view('template', $data);
    }

}