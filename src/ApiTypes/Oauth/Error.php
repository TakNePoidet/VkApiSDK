<?php

	namespace VkApiSDK\ApiTypes\Oauth;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Error extends BaseType {

		protected static $requiredParams = ['error','error_description'];


		protected static $map = [
			'error' 	 => true,
			'error_description' 	 => true,
			'redirect_uri' 	 => true,
		];


		protected $error;
		protected $error_description;
		protected $redirect_uri;


		public function setError($error) {
			$this->error = $error;
		}

		public function getError() {
			return $this->error;
		}


		public function setErrorDescription($error_description) {
			$this->error_description = $error_description;
		}

		public function getErrorDescription() {
			return $this->error_description;
		}


		public function setRedirectUri($redirect_uri) {
			$this->redirect_uri = $redirect_uri;
		}

		public function getRedirectUri() {
			return $this->redirect_uri;
		}




	}
?>