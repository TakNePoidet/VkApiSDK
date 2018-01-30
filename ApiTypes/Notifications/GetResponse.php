<?php

	namespace VkApiSDK\ApiTypes\Notifications;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'count' 	 => true,
			'items' 	 => array(ApiTypes\Notifications\Notification::class),
			'profiles' 	 => array(ApiTypes\Users\User::class),
			'groups' 	 => array(ApiTypes\Groups\Group::class),
			'last_viewed' 	 => true,
		];


		protected $count;
		protected $items;
		protected $profiles;
		protected $groups;
		protected $last_viewed;


		public function setCount($count) {
			$this->count = (int) $count;
		}

		public function getCount() {
			return (int) $this->count;
		}


		public function setItems($items) {
			$this->items = (array) $items;
		}

		public function getItems() {
			return (array) $this->items;
		}


		public function setProfiles($profiles) {
			$this->profiles = (array) $profiles;
		}

		public function getProfiles() {
			return (array) $this->profiles;
		}


		public function setGroups($groups) {
			$this->groups = (array) $groups;
		}

		public function getGroups() {
			return (array) $this->groups;
		}


		public function setLastViewed($last_viewed) {
			$this->last_viewed = (int) $last_viewed;
		}

		public function getLastViewed() {
			return (int) $this->last_viewed;
		}




	}
?>