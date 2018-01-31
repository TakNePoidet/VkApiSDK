<?php

	namespace VkApiSDK\ApiTypes\Docs;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class SaveResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'response' 	 => array(ApiTypes\Docs\Doc::class),
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