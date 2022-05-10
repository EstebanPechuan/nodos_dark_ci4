<?php

namespace App\Controllers;

class Home extends BaseController {

    public function index() {
        $data['contenido'] = 'home';
        $data['clase_header'] = null;
        return view('template', $data);
    }

    public function sendMailContact()
    {
        /*$response = new stdClass();
		 $response->status=true;
		$response->message=''; */

        $nombreApellido = $this->request->getPost('name');
        $mail = $this->request->getPost('email');
        $telefono = $this->request->getPost('phone');
        $asunto = $this->request->getPost('asunto');
        $message = $this->request->getPost('message');
        $recaptcha = $this->request->getPost('g_recaptcha_response');

        $secretKey = '6Lc9n4UfAAAAADBkb0DkzlbXu52ULjKMBNwAk-AJ';

        $data = array(
            'response' => $recaptcha,
            'secret' => $secretKey
        );

        $curl= curl_init("https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($curl,CURLOPT_POST, TRUE);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($curl,CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl,CURLOPT_FOLLOWLOCATION, TRUE); 
        
        $response = json_decode(curl_exec($curl));

        if($response->success){
    
            if ($nombreApellido!="" && $mail!="" && $telefono!="" && $asunto!="" && $message!="") {

                $email = \Config\Services::email();

                $email->setFrom($mail, $nombreApellido);
                $email->setTo('hello@nodoshub.com');

                $email->setSubject($asunto);
                $email->setMessage("                                Nombre y Apellido: ".$nombreApellido."
                                    Email: ".$mail."
                                    Telefono: ".$telefono."
                                    Asunto: ".$asunto."
                                    Mensaje: ".$message);

                if ($email->send()) {
                    
                    $response->status = true;
                    $response->message = "Email enviado correctamente";

                } else {
                
                    $response->status = false;
                    $response->message = "Error al enviar el email";
                }
                
            } else {
                
                $response->status = false;
                $response->message = "Error: Faltan datos";
            }

        }else{
            $response->status = false;
            $response->message = "Error validación captcha";
        }
        echo json_encode($response);
    }
}