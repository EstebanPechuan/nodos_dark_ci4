<?php

namespace App\Controllers;

class Home extends BaseController {

    public function index() {
        $data['contenido'] = 'home';
        $data['clase_header'] = null;
        return view('template', $data);
    }

}