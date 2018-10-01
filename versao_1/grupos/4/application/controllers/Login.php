<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function index()
	{
		$this->load->view('index');
	}

	public function validarlogin()
	{
		$usuario = 'user';//$this->input->post('usuario');
		$senha = '202cb962ac59075b964b07152d234b70';//md5($this->input->post('senha'));

		//echo $usuario . " " . $senha;

		if($usuario == NULL || $senha == NULL)
		{
			redirect(base_url(''));
		}

		$this->load->model('usuarios_model', 'usuarios');

		$query = $this->usuarios->getLogin($usuario, $senha);
		//print_r($query);
		$e = $query[0]->email;
		$s = $query[0]->senha;

        if($query == NULL)
		{
			redirect(base_url(''));
		} else {
			redirect(base_url('produtos/listarprodutos'));
		}
	}

	public function logout()
	{
		redirect(base_url(''));
	}

}