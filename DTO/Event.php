<?php
/////////////////////////////
// Event.php
// Autor: Richi Garza
// Fecha: 07-feb-2017
////////////////////////////
	class Event {
		private $id;
		private $eventName;
		private $venue;
		private $userHoster;
		private $band;
		private $votes;
		private $votesReached;
		private $createDate;
		private $lastUpdate;
	
		public function __construct($eventName, $venue, $userHoster, $band, $votes, $votesReached, $createDate, $lastUpdate){
			$this->eventName = $eventName;
			$this->venue = $venue;
			$this->userHoster = $userHoster;
			$this->band = $band;
			$this->votes = $votes;
			$this->votesReached = $votesReached;
			$this->createDate = $createDate;
			$this->lastUpdate = $lastUpdate;
		}

		public function getEventName(){
			return $this->eventName;
		}

		public function getVenue(){
			return $this->venue;
		}

		public function getUserHoster(){
			return $this->userHoster;
		}

		public function getBand(){
			return $this->band;
		}

		public function getVotes(){
			return $this->votes;
		}
		
		public function getVotesReached(){
			return $this->votesReached;
		}

		public function getCreateEvent(){
			return $this->createDate;
		}

		public function getLastUpdate(){
			return $this->lastUpdate;
		}
	}
?>