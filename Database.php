<?php

class Database{
	
	private $hostname;
	private $database;
	private $username;
	private $password;
	
	public function Database($hostname, $database, $username, $password){
		
		$this->hostname=$hostname;
		$this->database=$database;
		$this->username=$username;
		$this->password=$password;
}

	//gettery i settery ZROBIC!!!

?>