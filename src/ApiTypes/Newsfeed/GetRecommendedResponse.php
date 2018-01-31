<?php

	namespace VkApiSDK\ApiTypes\Newsfeed;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetRecommendedResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'items' 	 => array(ApiTypes\Newsfeed\NewsfeedItem::class),
			'profiles' 	 => array(ApiTypes\Users\UserFull::class),
			'groups' 	 => array(ApiTypes\Groups\GroupFull::class),
			'new_offset' 	 => true,
			'new_from' 	 => true,
		];


		protected $items;
		protected $profiles;
		protected $groups;
		protected $new_offset;
		protected $new_from;


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


		public function setNewOffset($new_offset) {
			$this->new_offset = $new_offset;
		}

		public function getNewOffset() {
			return $this->new_offset;
		}


		public function setNewFrom($new_from) {
			$this->new_from = $new_from;
		}

		public function getNewFrom() {
			return $this->new_from;
		}




	}
?>