<?php

	namespace VkApiSDK\ApiTypes\Users;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class UsersArray extends BaseType {

		protected static $requiredParams = ['count','items'];


		protected static $map = [
			'count' 	 => true,
			'items' 	 => true,
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