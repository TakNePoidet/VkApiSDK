<?php

	namespace VkApiSDK\ApiTypes\Orders;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'response' 	 => array(ApiTypes\Orders\Order::class),
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