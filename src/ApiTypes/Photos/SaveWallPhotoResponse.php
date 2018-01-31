<?php

	namespace VkApiSDK\ApiTypes\Photos;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class SaveWallPhotoResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'response' 	 => array(ApiTypes\Photos\Photo::class),
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