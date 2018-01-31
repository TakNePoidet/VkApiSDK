<?php

	namespace VkApiSDK\ApiTypes\Video;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetCatalogSectionExtendedResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'items' 	 => array(ApiTypes\Video\CatElement::class),
			'profiles' 	 => array(ApiTypes\Users\UserFull::class),
			'groups' 	 => array(ApiTypes\Groups\GroupFull::class),
			'next' 	 => true,
		];


		protected $items;
		protected $profiles;
		protected $groups;
		protected $next;


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


		public function setNext($next) {
			$this->next = $next;
		}

		public function getNext() {
			return $this->next;
		}




	}
?>