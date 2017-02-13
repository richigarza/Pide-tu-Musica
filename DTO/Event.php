<?php
/////////////////////////////
// Event.php
// Autor: Richi Garza
// Fecha: 09git-feb-2017
////////////////////////////
	class Event {
		private $idEvent;
		private $eventName;
		private $idVenue;
		private $userName;
		private $idBand;
		private $votes;
		private $votesReached;
		private $createdDate;
		private $lastUpdate;
	
		public function __construct($eventName, $idVenue, $userName, $idBand, $votes, $votesReached, $createdDate, $lastUpdate){
			$this->eventName = $eventName;
			$this->idVenue = $idVenue;
			$this->userName = $userName;
			$this->idBand = $idBand;
			$this->votes = $votes;
			$this->votesReached = $votesReached;
			$this->createdDate = $createdDate;
			$this->lastUpdate = $lastUpdate;
		}

		public function getEventName(){
			return $this->eventName;
		}

		public function getIdVenue(){
			return $this->idVenue;
		}

		public function getUserName(){
			return $this->userName;
		}

		public function getIdBand(){
			return $this->idBand;
		}

		public function getVotes(){
			return $this->votes;
		}
		
		public function getVotesReached(){
			return $this->votesReached;
		}

		public function getCreatedDate(){
			return $this->createdDate;
		}

		public function getLastUpdate(){
			return $this->lastUpdate;
		}
	}
?>