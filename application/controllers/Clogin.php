<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clogin extends CI_Controller {

	function __construct(){

	parent::__construct();
$this->load->model('Mlogin');
	$this->load->library('encrypt');


	}

	public function index(){

		$this->load->view('Vlogin');
	}

		public function ingresar(){
		
$data['user'] = $this->input->post('user');
$data['pass']  = sha1($this->input->post('pass'));

$respuesta=$this->Mlogin->ingresar($data);

if($respuesta==1){

#$data['mensaje']="El elemento Existe";
	$this->load->view('layout/header');
	$this->load->view('layout/menu');
	$this->load->view('persona/vactualizar',$data);
	$this->load->view('layout/footer');
	

}else{

$data['mensaje']="El elemento No Existe";
	$this->load->view('Vlogin',$data);

}


	}
}
