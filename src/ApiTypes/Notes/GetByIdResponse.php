<?php

	namespace VkApiSDK\ApiTypes\Notes;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetByIdResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'response' 	 => ApiTypes\Notes\Note::class,
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