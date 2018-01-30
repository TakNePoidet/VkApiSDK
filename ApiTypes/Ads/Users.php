<?php

	namespace VkApiSDK\ApiTypes\Ads;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Users extends BaseType {

		protected static $requiredParams = ['user_id','accesses'];


		protected static $map = [
			'user_id' 	 => true,
			'accesses' 	 => array(ApiTypes\Ads\Accesses::class),
		];


		protected $user_id;
		protected $accesses;


		public function setUserId($user_id) {
			$this->user_id = (int) $user_id;
		}

		public function getUserId() {
			return (int) $this->user_id;
		}


		public function setAccesses($accesses) {
			$this->accesses = (array) $accesses;
		}

		public function getAccesses() {
			return (array) $this->accesses;
		}




	}
?>