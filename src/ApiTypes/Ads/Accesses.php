<?php

	namespace VkApiSDK\ApiTypes\Ads;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Accesses extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'client_id' 	 => true,
			'role' 	 => ApiTypes\Ads\AccessRole::class,
		];


		protected $client_id;
		protected $role;


		public function setClientId($client_id) {
			$this->client_id = $client_id;
		}

		public function getClientId() {
			return $this->client_id;
		}


		public function setRole($role) {
			$this->role = $role;
		}

		public function getRole() {
			return $this->role;
		}




	}
?>