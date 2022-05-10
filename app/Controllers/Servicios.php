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
            ],
            [
                'name' => 'Enterprise Architect',
                'img_url' => 'enterprise-architect.svg'
            ],
            [
                'name' => 'Bonita Software',
                'img_url' => 'bonita.svg'
            ],
            [
                'name' => 'SQL',
                'img_url' => 'sql.svg'
            ],
            [
                'name' => 'MySQL',
                'img_url' => 'mysql.svg'
            ],
            [
                'name' => 'Maria DB',
                'img_url' => 'mariadb.svg'
            ],
            [
                'name' => 'MongoDB',
                'img_url' => 'mongo.svg'
            ],
            [
                'name' => 'PHP',
                'img_url' => 'php.svg'
            ],
            [
                'name' => 'CodeIgniter',
                'img_url' => 'codeigniter.svg'
            ],
            [
                'name' => 'Laravel',
                'img_url' => 'laravel.svg'
            ],
            [
                'name' => 'Python',
                'img_url' => 'python.svg'
            ],
            [
                'name' => 'Node',
                'img_url' => 'node.svg'
            ],
            [
                'name' => 'Express',
                'img_url' => 'express.svg'
            ],
            [
                'name' => 'Java',
                'img_url' => 'java.svg'
            ],
            [
                'name' => 'HTML',
                'img_url' => 'html.svg'
            ],
            [
                'name' => 'CSS',
                'img_url' => 'css.svg'
            ],
            [
                'name' => 'SASS',
                'img_url' => 'sass.svg'
            ],
            [
                'name' => 'Bootstrap',
                'img_url' => 'bootstrap.svg'
            ],
            [
                'name' => 'JavaScript',
                'img_url' => 'javascript.svg'
            ],
            [
                'name' => 'jQuery',
                'img_url' => 'jquery.svg'
            ],
            [
                'name' => 'Vue',
                'img_url' => 'vue.svg'
            ],
            [
                'name' => 'Angular',
                'img_url' => 'angular.svg'
            ],
            [
                'name' => 'React',
                'img_url' => 'react.svg'
            ],
            [
                'name' => 'Git',
                'img_url' => 'git.svg'
            ],
            [
                'name' => 'GitHub',
                'img_url' => 'github.svg'
            ],
            [
                'name' => 'GitLab',
                'img_url' => 'gitlab.svg'
            ],
            [
                'name' => 'React Native',
                'img_url' => 'react-native.svg'
            ],
            [
                'name' => 'Flutter',
                'img_url' => 'flutter.svg'
            ],
            [
                'name' => 'Red Mine',
                'img_url' => 'red-mine.svg'
            ],
            [
                'name' => 'Trello',
                'img_url' => 'trello.svg'
            ],
            [
                'name' => 'Jira',
                'img_url' => 'jira.svg'
            ],
            [
                'name' => 'Test Project',
                'img_url' => 'test-project.svg'
            ],
            [
                'name' => 'Selenium',
                'img_url' => 'selenium.svg'
            ],
            [
                'name' => 'Appium',
                'img_url' => 'appium.svg'
            ]
        ];
        
        $data['contenido'] = 'servicios';
        $data['clase_header'] = null;
        return view('template', $data);
    }

}