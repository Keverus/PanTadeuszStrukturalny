<?php

	include_once('parameters.php');

	$connection = mysqli_connect($hostname, $username, $password2, $database);
 	 	if (mysqli_connect_errno()) {
       		echo "Failed to connect to MySQL: " . mysqli_connect_error();
     	}

    $title=$_POST['title'];
	$content=$_POST['content'];
	$query="INSERT into reflections (title, content) values ('$title', '$content');";

	$result=mysqli_query($connection, $query);
	if (!$result) {
  		echo "An error occured.\n";
  		exit;
	}

	header("Location: ".$_SERVER['HTTP_REFERER']);
