<?php

	namespace VkApiSDK\ApiTypes\Messages;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetChatUsersFieldsResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'response' 	 => array(ApiTypes\Messages\UserXtrInvitedBy::class),
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