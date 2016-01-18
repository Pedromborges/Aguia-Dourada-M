<?php
	require_once "CRUD.php";
	$req = '';
	$text = '';
	if ($_REQUEST["str"]){
		$req.= $_REQUEST["str"];
		$params = explode("/", $req);
		$crud = new CRUD;
		$sucess = $crud->insert('Cliente', 'nome=?, telefone=?, email=?', array($params[0], $params[1], $params[2]));
	}
	//echo 'Done!';
?>