<?php

	namespace VkApiSDK\ApiTypes\Base;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Error extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'error_code' 	 => true,
			'error_msg' 	 => true,
			'request_params' 	 => array(ApiTypes\Base\RequestParam::class),
		];


		protected $error_code;
		protected $error_msg;
		protected $request_params;


		public function setErrorCode($error_code) {
			$this->error_code = (int) $error_code;
		}

		public function getErrorCode() {
			return (int) $this->error_code;
		}


		public function setErrorMsg($error_msg) {
			$this->error_msg = $error_msg;
		}

		public function getErrorMsg() {
			return $this->error_msg;
		}


		public function setRequestParams($request_params) {
			$this->request_params = (array) $request_params;
		}

		public function getRequestParams() {
			return (array) $this->request_params;
		}




	}
?>