
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model {


function __construct()
{
	parent::__construct();
}

public function ingresar($data){

$usuario    = $data['user'];
$contrasena = $data['pass'];

	$this->db->select('idUsuario,nomUsuario,clave,nombre,appaterno,apmaterno');
	$this->db->from('usuario a');
	$this->db->join('persona b','a.idPersona=b.idPersona');
	$this->db->where('nomUsuario',$usuario);
	$this->db->where('clave',$contrasena);
	$this->db->limit(1);

$resultado=$this->db->get();


if($resultado->num_rows()==1){

	$r=$resultado->row();

		$s_usuario=array(
		's_idUsuario' => $r->idUsuario,
		's_usuario'   => $r->nombre." ".$r->appaterno
		);

		$this->session->set_userdata($s_usuario);

	return 1;
}else{
	return 0;
}

}




}





