<?php

	namespace VkApiSDK\ApiTypes\Secure;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Transaction extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'uid_from' 	 => true,
			'uid_to' 	 => true,
			'votes' 	 => true,
			'date' 	 => true,
		];


		protected $id;
		protected $uid_from;
		protected $uid_to;
		protected $votes;
		protected $date;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setUidFrom($uid_from) {
			$this->uid_from = (int) $uid_from;
		}

		public function getUidFrom() {
			return (int) $this->uid_from;
		}


		public function setUidTo($uid_to) {
			$this->uid_to = (int) $uid_to;
		}

		public function getUidTo() {
			return (int) $this->uid_to;
		}


		public function setVotes($votes) {
			$this->votes = (int) $votes;
		}

		public function getVotes() {
			return (int) $this->votes;
		}


		public function setDate($date) {
			$this->date = (int) $date;
		}

		public function getDate() {
			return (int) $this->date;
		}




	}
?>