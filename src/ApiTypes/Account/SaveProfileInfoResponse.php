<?php

	namespace VkApiSDK\ApiTypes\Account;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class SaveProfileInfoResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'changed' 	 => ApiTypes\Base\BoolInt::class,
			'name_request' 	 => ApiTypes\Account\NameRequest::class,
		];


		protected $changed;
		protected $name_request;


		public function setChanged($changed) {
			$this->changed = $changed;
		}

		public function getChanged() {
			return $this->changed;
		}


		public function setNameRequest($name_request) {
			$this->name_request = $name_request;
		}

		public function getNameRequest() {
			return $this->name_request;
		}




	}
?>