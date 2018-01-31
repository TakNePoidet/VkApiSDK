<?php

	namespace VkApiSDK\ApiTypes\Stats;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetPostReachResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'response' 	 => array(ApiTypes\Stats\WallpostStat::class),
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