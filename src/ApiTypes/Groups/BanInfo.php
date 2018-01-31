<?php

	namespace VkApiSDK\ApiTypes\Groups;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class BanInfo extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'admin_id' 	 => true,
			'date' 	 => true,
			'reason' 	 => true,
			'comment' 	 => true,
			'end_date' 	 => true,
		];


		protected $admin_id;
		protected $date;
		protected $reason;
		protected $comment;
		protected $end_date;


		public function setAdminId($admin_id) {
			$this->admin_id = (int) $admin_id;
		}

		public function getAdminId() {
			return (int) $this->admin_id;
		}


		public function setDate($date) {
			$this->date = (int) $date;
		}

		public function getDate() {
			return (int) $this->date;
		}


		public function setReason($reason) {
			$this->reason = (int) $reason;
		}

		public function getReason() {
			return (int) $this->reason;
		}


		public function setComment($comment) {
			$this->comment = $comment;
		}

		public function getComment() {
			return $this->comment;
		}


		public function setEndDate($end_date) {
			$this->end_date = (int) $end_date;
		}

		public function getEndDate() {
			return (int) $this->end_date;
		}




	}
?>