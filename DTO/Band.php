<?php
/////////////////////////////
// Band.php
// Autor: Richi Garza
// Fecha: 09-feb-2017
////////////////////////////
	class Band {
		private $idBand;
		private $bandName;
		private $bandGenre;
		private $createdDate;
		private $lastUpdate;

		public function __construct($bandName, $bandGenre, $createdDate, $lastUpdate){
			$this->bandName = $bandName;
			$this->bandGenre = $bandGenre;
			$this->createdDate = $createdDate;
			$this->lastUpdate = $lastUpdate;
		}

		public function getBandName(){
			return $this->bandName;
		}

		public function getBandGenre(){
			return $this->bandGenre;
		}

		public function getCreatedDate(){
			return $this->createdDate;
		}

		public function getLastUpdate(){
			return $this->lastUpdate;
		}
	}
?>