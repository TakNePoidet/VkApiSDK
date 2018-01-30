<?php

	namespace VkApiSDK\ApiTypes\Account;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class ChangePasswordResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'token' 	 => true,
			'secret' 	 => true,
		];


		protected $token;
		protected $secret;


		public function setToken($token) {
			$this->token = $token;
		}

		public function getToken() {
			return $this->token;
		}


		public function setSecret($secret) {
			$this->secret = $secret;
		}

		public function getSecret() {
			return $this->secret;
		}




	}
?>