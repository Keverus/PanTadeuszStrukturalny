<?php

	include_once('parameters.php');

	$connection=pg_connect("host=$hostname port=5432 user=$username dbname=$database password=$password1")
		or die ("Couldn't connect to database: ".pg_last_error($connection));

	$title=$_POST['title'];
	$content=$_POST['content'];
	$query="INSERT into reflections (title, content) values ('$title', '$content');";

	$result = pg_query($connection, $query);
	if (!$result) {
  		echo "An error occured.\n";
  		exit;
	}

	header("Location: ".$_SERVER['HTTP_REFERER']);