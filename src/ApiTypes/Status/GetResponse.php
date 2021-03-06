<?php

	namespace VkApiSDK\ApiTypes\Status;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'response' 	 => ApiTypes\Status\Status::class,
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