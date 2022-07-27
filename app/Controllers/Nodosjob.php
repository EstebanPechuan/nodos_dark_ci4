<?php

namespace App\Controllers;

class Nodosjobs extends BaseController {

    public function index() {
        $data['contenido'] = 'nodosjobs';
        $data['clase_header'] = null;
        return view('template', $data);
    }

}