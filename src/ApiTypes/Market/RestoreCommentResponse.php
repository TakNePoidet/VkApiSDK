<?php

	namespace VkApiSDK\ApiTypes\Market;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class RestoreCommentResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'response' 	 => ApiTypes\Base\BoolInt::class,
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