<?php
	session_start();
	$name = $_POST["name"];
	$surname = $_POST["surname"];
	$age = $_POST["age"];
	$email = $_POST["email"];

	if (trim($name) == "")
		print "name cant be empty"; 
	if (trim($surname) == "")
		print "surname cant be empty"; 
	if (trim($age) == "")
		print "age cant be empty"; 
	if (trim($email) == "")
		print "email cant be empty"; 
	
	$key = md5($name.$email);
	$_SESSION["user"] = $key;
	setcookie("session_id", session_id(), time() + 360);
	header('Location: '."/");