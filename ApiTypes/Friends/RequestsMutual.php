<?php

	namespace VkApiSDK\ApiTypes\Friends;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class RequestsMutual extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'count' 	 => true,
			'users' 	 => true,
		];


		protected $count;
		protected $users;


		public function setCount($count) {
			$this->count = (int) $count;
		}

		public function getCount() {
			return (int) $this->count;
		}


		public function setUsers($users) {
			$this->users = (array) $users;
		}

		public function getUsers() {
			return (array) $this->users;
		}




	}
?>