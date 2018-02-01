<?php

	namespace VkApiSDK;
	use Closure;
	use VkApiSDK\Exception;
	use VkApiSDK\ApiTypes;



	class ExceptionMethod extends Exception {
		

		protected $request_params = [];

		function __construct($Error) {

			$this->request_params = $Error->getRequestParams();
			parent::__construct($Error->getErrorMsg(), $Error->getErrorCode());
		}
		public function getRequestParams() {
			return (array) $this->request_params;
		}
	}