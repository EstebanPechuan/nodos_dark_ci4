<?php

namespace App\Controllers;

class Servicios extends BaseController {

    public function index() {
        $data['contenido'] = 'servicios';
        $data['clase_header'] = 'header-scroll';
        return view('template', $data);
    }

}