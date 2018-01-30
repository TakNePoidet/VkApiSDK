<?php

	namespace VkApiSDK\ApiTypes\Base;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class UserId extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'user_id' 	 => true,
		];


		protected $user_id;


		public function setUserId($user_id) {
			$this->user_id = (int) $user_id;
		}

		public function getUserId() {
			return (int) $this->user_id;
		}




	}
?>