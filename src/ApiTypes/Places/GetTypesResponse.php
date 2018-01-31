<?php

	namespace VkApiSDK\ApiTypes\Places;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetTypesResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'response' 	 => array(ApiTypes\Places\Types::class),
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