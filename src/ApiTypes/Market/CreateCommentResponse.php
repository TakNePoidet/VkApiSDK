<?php

	namespace VkApiSDK\ApiTypes\Market;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class CreateCommentResponse extends BaseType {

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