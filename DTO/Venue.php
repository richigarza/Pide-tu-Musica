<?php
/////////////////////////////
// Venue.php
// Autor: Richi Garza
// Fecha: 09-feb-2017
////////////////////////////
	class Venue {
		private $idVenue;
		private $venueName;
		private $location;
		private $createdDate;
		private $lastUpdate;

		public function __construct($venueName, $location, $createdDate, $lastUpdate){
			$this->venueName = $venueName;
			$this->location = $location;
			$this->createdDate = $createdDate;
			$this->lastUpdate = $lastUpdate;
		}

		public function getVenueName(){
			return $this->venueName;
		}

		public function getLocation(){
			return $this->location;
		}

		public function getCreatedDate(){
			return $this->createdDate;
		}

		public function getLastUpdate(){
			return $this->lastUpdate;
		}
	}
?>