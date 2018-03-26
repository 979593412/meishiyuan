<?php 

	$uname = $_GET['uname'];

	$pdo = new PDO('mysql:host=localhost;dbname=pass;charset=utf8','root','');

	$sql = "select * from user where username = '{$uname}'";

	$stmt = $pdo->query($sql);

	$res = $stmt->fetch(PDO::FETCH_ASSOC);

	// var_dump($res);
	if($res){

		echo 1;
	} else {

		echo 0;
	}

