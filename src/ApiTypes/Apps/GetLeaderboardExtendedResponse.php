<?php

	namespace VkApiSDK\ApiTypes\Apps;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetLeaderboardExtendedResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'count' 	 => true,
			'items' 	 => array(ApiTypes\Apps\Leaderboard::class),
			'profiles' 	 => array(ApiTypes\Users\UserMin::class),
		];


		protected $count;
		protected $items;
		protected $profiles;


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




	}
?>