<?php

	namespace VkApiSDK\ApiTypes\Users;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetSubscriptionsResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'users' 	 => ApiTypes\Users\UsersArray::class,
			'groups' 	 => ApiTypes\Groups\GroupsArray::class,
		];


		protected $users;
		protected $groups;


		public function setUsers($users) {
			$this->users = $users;
		}

		public function getUsers() {
			return $this->users;
		}


		public function setGroups($groups) {
			$this->groups = $groups;
		}

		public function getGroups() {
			return $this->groups;
		}




	}
?>