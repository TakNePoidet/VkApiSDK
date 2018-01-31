<?php

	namespace VkApiSDK\ApiTypes\Leads;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Entry extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'uid' 	 => true,
			'aid' 	 => true,
			'sid' 	 => true,
			'date' 	 => true,
			'status' 	 => true,
			'test_mode' 	 => ApiTypes\Base\BoolInt::class,
			'start_date' 	 => true,
			'comment' 	 => true,
		];


		protected $uid;
		protected $aid;
		protected $sid;
		protected $date;
		protected $status;
		protected $test_mode;
		protected $start_date;
		protected $comment;


		public function setUid($uid) {
			$this->uid = (int) $uid;
		}

		public function getUid() {
			return (int) $this->uid;
		}


		public function setAid($aid) {
			$this->aid = (int) $aid;
		}

		public function getAid() {
			return (int) $this->aid;
		}


		public function setSid($sid) {
			$this->sid = $sid;
		}

		public function getSid() {
			return $this->sid;
		}


		public function setDate($date) {
			$this->date = (int) $date;
		}

		public function getDate() {
			return (int) $this->date;
		}


		public function setStatus($status) {
			$this->status = (int) $status;
		}

		public function getStatus() {
			return (int) $this->status;
		}


		public function setTestMode($test_mode) {
			$this->test_mode = $test_mode;
		}

		public function getTestMode() {
			return $this->test_mode;
		}


		public function setStartDate($start_date) {
			$this->start_date = (int) $start_date;
		}

		public function getStartDate() {
			return (int) $this->start_date;
		}


		public function setComment($comment) {
			$this->comment = $comment;
		}

		public function getComment() {
			return $this->comment;
		}




	}
?>