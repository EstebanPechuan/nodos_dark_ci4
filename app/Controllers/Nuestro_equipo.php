<?php

namespace App\Controllers;

class Nuestro_equipo extends BaseController {

    public function index() {
        $data['contenido'] = 'nuestro_equipo';
        $data['clase_header'] = null;
        return view('template', $data);
    }

}