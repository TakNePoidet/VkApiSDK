<?php

	namespace VkApiSDK\ApiTypes\Secure;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetTransactionsHistoryResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'response' 	 => array(ApiTypes\Secure\Transaction::class),
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