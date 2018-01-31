<?php

	namespace VkApiSDK\ApiTypes\Groups;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class EditPlaceResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'success' 	 => ApiTypes\Base\OkResponse::class,
			'address' 	 => true,
		];


		protected $success;
		protected $address;


		public function setSuccess($success) {
			$this->success = $success;
		}

		public function getSuccess() {
			return $this->success;
		}


		public function setAddress($address) {
			$this->address = $address;
		}

		public function getAddress() {
			return $this->address;
		}




	}
?>