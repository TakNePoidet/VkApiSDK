<?php

	namespace VkApiSDK\ApiTypes\Secure;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class TokenChecked extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'success' 	 => ApiTypes\Base\OkResponse::class,
			'user_id' 	 => true,
			'date' 	 => true,
			'expire' 	 => true,
		];


		protected $success;
		protected $user_id;
		protected $date;
		protected $expire;


		public function setSuccess($success) {
			$this->success = $success;
		}

		public function getSuccess() {
			return $this->success;
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


		public function setExpire($expire) {
			$this->expire = (int) $expire;
		}

		public function getExpire() {
			return (int) $this->expire;
		}




	}
?>