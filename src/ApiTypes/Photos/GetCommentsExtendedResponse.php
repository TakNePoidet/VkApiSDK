<?php

	namespace VkApiSDK\ApiTypes\Photos;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetCommentsExtendedResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'count' 	 => true,
			'real_offset' 	 => true,
			'items' 	 => array(ApiTypes\Wall\WallComment::class),
			'profiles' 	 => array(ApiTypes\Users\UserFull::class),
			'groups' 	 => array(ApiTypes\Groups\GroupFull::class),
		];


		protected $count;
		protected $real_offset;
		protected $items;
		protected $profiles;
		protected $groups;


		public function setCount($count) {
			$this->count = (int) $count;
		}

		public function getCount() {
			return (int) $this->count;
		}


		public function setRealOffset($real_offset) {
			$this->real_offset = (int) $real_offset;
		}

		public function getRealOffset() {
			return (int) $this->real_offset;
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




	}
?>