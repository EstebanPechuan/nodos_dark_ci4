<?php

namespace App\Controllers;

class Exitos extends BaseController {

    public function index() {
        $data['contenido'] = 'exitos';
        $data['clase_header'] = null;
        return view('template', $data);
    }

}