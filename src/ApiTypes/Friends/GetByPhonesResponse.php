<?php

	namespace VkApiSDK\ApiTypes\Friends;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetByPhonesResponse extends BaseType {

		protected static $requiredParams = ['response'];


		protected static $map = [
			'response' 	 => array(ApiTypes\Friends\UserXtrPhone::class),
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