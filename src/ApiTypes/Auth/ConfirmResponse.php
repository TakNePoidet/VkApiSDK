<?php

	namespace VkApiSDK\ApiTypes\Auth;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class ConfirmResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'success' 	 => true,
			'user_id' 	 => true,
		];


		protected $success;
		protected $user_id;


		public function setSuccess($success) {
			$this->success = (int) $success;
		}

		public function getSuccess() {
			return (int) $this->success;
		}


		public function setUserId($user_id) {
			$this->user_id = (int) $user_id;
		}

		public function getUserId() {
			return (int) $this->user_id;
		}




	}
?>