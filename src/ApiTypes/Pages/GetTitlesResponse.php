<?php

	namespace VkApiSDK\ApiTypes\Pages;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetTitlesResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'response' 	 => array(ApiTypes\Pages\Wikipage::class),
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