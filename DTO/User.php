<?php
/////////////////////////////
// User.php
// Autor: Richi Garza
// Fecha: 07-feb-2017
////////////////////////////
	class User {
		private $id;
		private $firstName;
		private $lastName;
		private $userName;
		private $password;
		private $email;
		private $location;
		private $userType;
		private $registerDate;
		private $lastUpdate;

		public function __construct($firstName, $lastName, $userName, $email, $location, $userType, $registerDate, $lastUpdate){
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->userName = $userName;
			$this->email = $email;
			$this->location = $location;
			$this->userType = $userType;
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

		function getUserType(){
			return $this->userType;
		}

		function getRegisterDate(){
			return $this->registerDate;
		}

		function getLastUpdate(){
			return $this->lastUpdate;
		}
	}
?>