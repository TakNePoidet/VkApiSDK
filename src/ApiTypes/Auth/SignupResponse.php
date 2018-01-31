<?php

	namespace VkApiSDK\ApiTypes\Auth;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class SignupResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'sid' 	 => true,
		];


		protected $sid;


		public function setSid($sid) {
			$this->sid = $sid;
		}

		public function getSid() {
			return $this->sid;
		}




	}
?>