<?php

	require_once 'conn.php';

	$con = new Conexao();
	$conexao = $con->conectar();

	$query = 'insert into convidados (nome, num) values (:nome, :num);';


	$stmt = $conexao->prepare($query);

	$stmt->bindValue(':nome', $_POST['nome']);
	$stmt->bindValue(':num', $_POST['num']);

	$stmt->execute();

	header("location: index.php?msg=registrado");

?>
