<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('login_vista');
	}
    public function login(){
        //$data['username'] = $this->input->post('user');
        //$data['password'] = $this->input->post('password');
    
        $username = $this->input->post('user');
        $password = $this->input->post('password');
        
        $this->load->model('usuario');
        $user_db=$this->usuario->obtenerUsuario($usuario);
        
        if($password == $user_db[0]->password){
            $data['mensaje']="logeo exitoso";
        }else{
            $data['mensaje']="problemas en el logueo";
        }
        //echo $username.' '.$password;
        //print_r($user_db);
        $this->load->view('resultado', $data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */