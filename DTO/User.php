<?php
/////////////////////////////
// User.php
// Autor: Richi Garza
// Fecha: 09-feb-2017
////////////////////////////
	class User {
		private $idUser;
		private $firstName;
		private $lastName;
		private $userName;
		private $password;
		private $email;
		private $location;
		private $userType;
		private $createdDate;
		private $lastUpdate;

		public function __construct($firstName, $lastName, $userName, $email, $location, $userType, $createdDate, $lastUpdate){
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->userName = $userName;
			$this->email = $email;
			$this->location = $location;
			$this->userType = $userType;
			$this->createdDate = $createdDate;
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

		function getCreatedDate(){
			return $this->createdDate;
		}

		function getLastUpdate(){
			return $this->lastUpdate;
		}
	}
?>