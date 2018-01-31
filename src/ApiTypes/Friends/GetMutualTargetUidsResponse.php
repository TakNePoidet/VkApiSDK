<?php

	namespace VkApiSDK\ApiTypes\Friends;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetMutualTargetUidsResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'response' 	 => array(ApiTypes\Friends\MutualFriend::class),
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