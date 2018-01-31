<?php

	namespace VkApiSDK\ApiTypes\Gifts;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Gift extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'from_id' 	 => true,
			'message' 	 => true,
			'date' 	 => true,
			'gift' 	 => ApiTypes\Gifts\Layout::class,
			'privacy' 	 => true,
			'gift_hash' 	 => true,
		];


		protected $id;
		protected $from_id;
		protected $message;
		protected $date;
		protected $gift;
		protected $privacy;
		protected $gift_hash;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setFromId($from_id) {
			$this->from_id = (int) $from_id;
		}

		public function getFromId() {
			return (int) $this->from_id;
		}


		public function setMessage($message) {
			$this->message = $message;
		}

		public function getMessage() {
			return $this->message;
		}


		public function setDate($date) {
			$this->date = (int) $date;
		}

		public function getDate() {
			return (int) $this->date;
		}


		public function setGift($gift) {
			$this->gift = $gift;
		}

		public function getGift() {
			return $this->gift;
		}


		public function setPrivacy($privacy) {
			$this->privacy = (int) $privacy;
		}

		public function getPrivacy() {
			return (int) $this->privacy;
		}


		public function setGiftHash($gift_hash) {
			$this->gift_hash = $gift_hash;
		}

		public function getGiftHash() {
			return $this->gift_hash;
		}




	}
?>