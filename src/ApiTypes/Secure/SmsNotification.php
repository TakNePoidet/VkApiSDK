<?php

	namespace VkApiSDK\ApiTypes\Secure;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class SmsNotification extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'app_id' 	 => true,
			'user_id' 	 => true,
			'date' 	 => true,
			'message' 	 => true,
		];


		protected $id;
		protected $app_id;
		protected $user_id;
		protected $date;
		protected $message;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setAppId($app_id) {
			$this->app_id = (int) $app_id;
		}

		public function getAppId() {
			return (int) $this->app_id;
		}


		public function setUserId($user_id) {
			$this->user_id = (int) $user_id;
		}

		public function getUserId() {
			return (int) $this->user_id;
		}


		public function setDate($date) {
			$this->date = (int) $date;
		}

		public function getDate() {
			return (int) $this->date;
		}


		public function setMessage($message) {
			$this->message = $message;
		}

		public function getMessage() {
			return $this->message;
		}




	}
?>