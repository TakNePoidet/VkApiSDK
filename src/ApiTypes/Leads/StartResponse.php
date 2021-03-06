<?php

	namespace VkApiSDK\ApiTypes\Leads;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class StartResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'response' 	 => ApiTypes\Leads\Start::class,
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