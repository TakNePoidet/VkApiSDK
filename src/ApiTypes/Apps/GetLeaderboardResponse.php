<?php

	namespace VkApiSDK\ApiTypes\Apps;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetLeaderboardResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'count' 	 => true,
			'items' 	 => array(ApiTypes\Apps\Leaderboard::class),
		];


		protected $count;
		protected $items;


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




	}
?>