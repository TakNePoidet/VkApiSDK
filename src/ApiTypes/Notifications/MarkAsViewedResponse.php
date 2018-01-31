<?php

	namespace VkApiSDK\ApiTypes\Notifications;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class MarkAsViewedResponse extends BaseType {

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