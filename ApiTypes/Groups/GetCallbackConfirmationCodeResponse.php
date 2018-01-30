<?php

	namespace VkApiSDK\ApiTypes\Groups;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetCallbackConfirmationCodeResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'code' 	 => true,
		];


		protected $code;


		public function setCode($code) {
			$this->code = $code;
		}

		public function getCode() {
			return $this->code;
		}




	}
?>