<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//modificación para que cargue las vistas
//class Welcome extends CI_Controller {
    
class Usuario extends CI_Model {
    function obtenerUsuario($username){
        $this->db->from('usuario');
        $this->db->where('username', $username);
        $q=$this->db->get();
        
        return $q->result();
    }
}
     /*
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
        $user_db=$this->usuario->obtenerUsuario();
        
        if($password ==)
        //echo $username.' '.$password;
        //print_r($user_db);
        $this->load->view('resultado', $data);
    }
     * 
     */
}