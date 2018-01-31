<?php

	namespace VkApiSDK\ApiTypes\Friends;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetRequestsResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'count' 	 => true,
			'items' 	 => true,
			'count_unread' 	 => true,
		];


		protected $count;
		protected $items;
		protected $count_unread;


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


		public function setCountUnread($count_unread) {
			$this->count_unread = (int) $count_unread;
		}

		public function getCountUnread() {
			return (int) $this->count_unread;
		}




	}
?>