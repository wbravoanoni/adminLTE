
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MCiudad extends CI_Model {


function __construct()
{
	parent::__construct();
}


public function getCiudades($s){
$s = $this->db->get_where('ciudades',array('activo'=>$s));
return $s->result();

}



}





