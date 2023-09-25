<?php
    namespace App\Controllers;
    use CodeIgniter\Controller;

    class panel_Controller extends Controller{

        public function index(){
            $session = session();
            $usuario = $session->get('usuario');
            $perfilId = $session->get('perfil_id');

            $data['perfil_id'] = $perfilId;

            $titulo['titulo'] = 'Panel de usuario';
            echo view('front/head_view', $titulo);
            echo view('front/navbar_view');
            echo view('back/usuario/loggeado', $data);
            echo view('front/footer_view');
        }
    }
?>