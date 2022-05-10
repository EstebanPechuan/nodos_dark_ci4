<?php

namespace App\Controllers;

class Nosotros extends BaseController {

    public function index() {
        $data['contenido'] = 'nosotros';
        $data['clase_header'] = null;
        return view('template', $data);
    }

}