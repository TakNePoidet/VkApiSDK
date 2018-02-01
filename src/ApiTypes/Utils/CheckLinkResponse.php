<?php

	namespace VkApiSDK\ApiTypes\Utils;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class CheckLinkResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'response' 	 => ApiTypes\Utils\LinkChecked::class,
		];


		protected $response;


		public function setResponse($response) {
			$this->response = $response;
		}

		public function getResponse() {
			return $this->response;
		}




	}
?>