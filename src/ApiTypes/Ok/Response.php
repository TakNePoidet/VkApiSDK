<?php

	namespace VkApiSDK\ApiTypes\Ok;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Response extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'response' 	 => ApiTypes\Base\OkResponse::class,
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