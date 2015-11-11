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

	$url = 'https://mandrillapp.com/api/1.0/messages/send.json';
	$params = [
		'message' => array(
			'subject' => $title,
			'text' => $reflection,
			'html' => '<p>'.$content.'</p>',
			'from_email' => 'wojcikk@v-ie.uek.krakow.pl',
			'to' => array(
				array(
					'email' => 'wojcikk@wizard.uek.krakow.pl',
					'name' => 'Katarzyna Wójcik'
				)
			)
		)
	];

	$params['key'] = '1G6Ee5e6hCDaJTiU4QVkgw';
	$params = json_encode($params);
	$ch = curl_init(); 

	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	curl_setopt($ch, CURLOPT_POSTFIELDS, $params);

	$head = curl_exec($ch); 
	$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); 
	curl_close($ch);

	header("Location: ".$_SERVER['HTTP_REFERER']);
