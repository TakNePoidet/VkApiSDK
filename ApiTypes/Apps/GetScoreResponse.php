<?php

	namespace VkApiSDK\ApiTypes\Apps;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetScoreResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'response' 	 => true,
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