<?php

	$hostname = "localhost";
	$username = "root";
	$password1 = "";
	$database = "rdec";

	$db_con = new mysqli($hostname, $username, $password1, $database);

	$username = $_POST['username'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$contact = $_POST['contact'];
	$rollno = $_POST['rollno'];

	$query = "INSERT INTO logindetails(username, name, password, contact, rollno) VALUES('$username','$name','$password','$contact','$rollno');";

	mysqli_query($db_con, $query);

	echo 'Values inserted successfully';

	mysqli_close($db_con);
?>