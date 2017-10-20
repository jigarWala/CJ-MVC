<?php 

require_once(__DIR__.'/../test_core/CJ_Model.php');

class UserController{

function __construct(){
	echo 'user controller CLASS CREATED '."<br />";
	$this->model=new CJ_Model();

}
function getAll(){
	echo json_encode($this->model->read('users',array('*'),null));
}

function get(...$args){

	
	echo json_encode($this->model->read('users',array('*'),null));


}

}


 ?>