<?php

	namespace VkApiSDK\ApiTypes\Wall;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetByIdExtendedResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'items' 	 => array(ApiTypes\Wall\WallpostFull::class),
			'profiles' 	 => array(ApiTypes\Users\UserFull::class),
			'groups' 	 => array(ApiTypes\Groups\GroupFull::class),
		];


		protected $items;
		protected $profiles;
		protected $groups;


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




	}
?>