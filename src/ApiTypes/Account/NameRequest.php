<?php

	namespace VkApiSDK\ApiTypes\Account;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class NameRequest extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'status' 	 => true,
			'first_name' 	 => true,
			'last_name' 	 => true,
		];


		protected $id;
		protected $status;
		protected $first_name;
		protected $last_name;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setStatus($status) {
			$this->status = $status;
		}

		public function getStatus() {
			return $this->status;
		}


		public function setFirstName($first_name) {
			$this->first_name = $first_name;
		}

		public function getFirstName() {
			return $this->first_name;
		}


		public function setLastName($last_name) {
			$this->last_name = $last_name;
		}

		public function getLastName() {
			return $this->last_name;
		}




	}
?>