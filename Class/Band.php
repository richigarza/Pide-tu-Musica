<?php

	class Band {
		private $id;
		private $bandName;
		private $bandGenre;
		private $lastUpdate;

		public function __construct(){
			$this->bandName = $bandName;
			$this->bandGenre = $bandGenre;
			$this->lastUpdate = $lastUpdate;
		}

		public function getBandName(){
			return $this->bandName;
		}

		public function getBandGenre(){
			return $this->bandGenre;
		}

		public function getLastUpdate(){
			return $this->lastUpdate;
		}
	}
?>