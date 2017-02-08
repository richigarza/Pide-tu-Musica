<?php
/////////////////////////////
// Venue.php
// Autor: Richi Garza
// Fecha: 07-feb-2017
////////////////////////////
	class Venue {
		private $id;
		private $venueName;
		private $location;
		private $lastUpdate;

		public function __construct($venueName, $location, $lastUpdate){
			$this->venueName = $venueName;
			$this->location = $location;
			$this->lastUpdate = $lastUpdate;
		}

		public function getVenueName(){
			return $this->venueName;
		}

		public function getLocation(){
			return $this->location;
		}

		public function getLastUpdate(){
			return $this->lastUpdate;
		}
	}
?>