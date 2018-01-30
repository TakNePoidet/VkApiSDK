<?php

	namespace VkApiSDK\ApiTypes\Polls;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetVotersResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'response' 	 => array(ApiTypes\Polls\Voters::class),
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