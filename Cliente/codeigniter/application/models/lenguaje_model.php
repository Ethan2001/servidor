<?php
class lenguaje_model extends CI_Model{
	public function crear($nombre){
		$lenguaje=R::dispense('lenguaje');
		$lenguaje->nombre=$nombre;
		R::store($lenguaje);
		R::close();
	}
	public function listar(){
		return R::findAll('lenguaje');
		
		
}
public function borrar($id){
	$lp= R::load('lp',$id);
    if($lp->id !=0){
    	R::trash($lp);
    }
    R::close();
}
}
	?>