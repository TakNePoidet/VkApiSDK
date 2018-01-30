<?php

	namespace VkApiSDK\ApiTypes\Messages;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetDialogsResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'count' 	 => true,
			'unread_dialogs' 	 => true,
			'items' 	 => array(ApiTypes\Messages\Dialog::class),
		];


		protected $count;
		protected $unread_dialogs;
		protected $items;


		public function setCount($count) {
			$this->count = (int) $count;
		}

		public function getCount() {
			return (int) $this->count;
		}


		public function setUnreadDialogs($unread_dialogs) {
			$this->unread_dialogs = (int) $unread_dialogs;
		}

		public function getUnreadDialogs() {
			return (int) $this->unread_dialogs;
		}


		public function setItems($items) {
			$this->items = (array) $items;
		}

		public function getItems() {
			return (array) $this->items;
		}




	}
?>