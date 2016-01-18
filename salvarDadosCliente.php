<?php
	require_once "CRUD.php";
	$req = '';
	$text = '';
	if ($_REQUEST["str"]){
		$req.= $_REQUEST["str"];
		$params = explode("/", $req);
		$crud = new CRUD;
		$crud->insert('Cliente', 'Nome=?, Telefone=?, Email=?', array($params[0], $params[1], $params[2]));
	}
?>