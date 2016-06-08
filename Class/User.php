<?php
	class User {
		private $id;
		private $firstName;
		private $lastName;
		private $userName;
		private $password;
		private $email;
		private $location;
		private $registerDate;
		private $lastUpdate;

		public function __construct($firstName, $lastName, $userName, $email, $location, $registerDate, $lastUpdate){
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->userName = $userName;
			$this->email = $email;
			$this->location = $location;
			$this->registerDate = $registerDate;
			$this->lastUpdate = $lastUpdate;
		}

		function getUserName(){
			return $this->userName;
		}

		function getFirstName(){
			return $this->firstName;
		}

		function getLastName(){
			return $this->lastName;
		}

		function getPassword(){
			return $this->password;
		}

		function setPassword($password){
			$this->password = $password;
		}

		function getEmail(){
			return $this->email;
		}

		function getLocation(){
			return $this->location;
		}

		function getRegisterDate(){
			return $this->registerDate;
		}

		function getLastUpdate(){
			return $this->lastUpdate;
		}
	}
?>