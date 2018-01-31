<?php

	namespace VkApiSDK\ApiTypes\Auth;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class RestoreResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'success' 	 => true,
			'sid' 	 => true,
		];


		protected $success;
		protected $sid;


		public function setSuccess($success) {
			$this->success = (int) $success;
		}

		public function getSuccess() {
			return (int) $this->success;
		}


		public function setSid($sid) {
			$this->sid = $sid;
		}

		public function getSid() {
			return $this->sid;
		}




	}
?>