<?php
    namespace App\Controllers;
    Use App\Models\usuario_Model;
    use CodeIgniter\Controller;

    class login_Controller extends BaseController{


        public function index(){
            helper(['form', 'url']);

            $data['titulo'] = "Login";
            echo view('front/head_view', $data);
            echo view('front/navbar_view');
            echo view('back/usuario/login');
            echo view('front/footer_view');
        }

        public function auth(){

            $session = session();
            $model = new usuario_Model();

            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');

            $data = $model->where('email', $email)->first();
            if($data){
                $pass = $data['pass'];
                $baja = $data['baja'];
                
                if($baja == 'SI'){
                    $session->setFlashdata('message', 'Usuario dado de baja');
                    return redirect()->to('/login');
                }

                $validate_pass = password_verify($password, $pass);

                if($validate_pass){
                    $session_data = [
                        'id_usuario' => $data['id_usuario'],
                        'nombre' => $data['nombre'],
                        'apellido' => $data['apellido'],
                        'usuario' => $data['usuario'],
                        'email' => $data['email'],
                        'perfil_id' => $data['perfil_id'],
                        'logged_in' => TRUE
                    ];

                    $session->set($session_data);
                    $session->setFlashdata('message', 'Bienvenido!');
                    return redirect()->to('/panel');
                }
                else{
                    $session->setFlashdata('message', 'credenciales inválidas');
                    return redirect()->to('/login');
                }
            }
            else{
                $session->setFlashdata('message', 'Correo o contraseña incorrecta');
                return redirect()->to('/login');
            }
        }


        public function logout(){
            $session = session();
            $session->destroy();
            return redirect()->to('inicio');
        }
    }
?>