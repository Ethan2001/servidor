<?php
class Lenguajes extends CI_Controller{

	public  function crear(){
		enmarcar($this, 'lenguajes/crearlenguaje');
	}
	public  function crearpost(){
		$nombre=$_POST['nombre'];
		$this->load->model('lenguaje_model');
		$this->lenguaje_model->crear($nombre);
	}
	public function listar(){
		$this->load->model('lenguaje_model');
		$datos['leng']= $this->lenguaje_model->listar();
		enmarcar($this, 'lenguajes/listar',$datos);
	}
	public function editar(){
		
	}
public function borrar(){
	$id=$_post('id');
	$this->load->model('lenguaje_model');
	$this->lenguaje_model->borrar($id);
    $this->listar();
}


}
?>