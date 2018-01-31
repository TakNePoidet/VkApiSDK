<?php

	namespace VkApiSDK\ApiTypes\Messages;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetHistoryResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'count' 	 => true,
			'unread' 	 => true,
			'items' 	 => array(ApiTypes\Messages\Message::class),
			'in_read' 	 => true,
			'out_read' 	 => true,
		];


		protected $count;
		protected $unread;
		protected $items;
		protected $in_read;
		protected $out_read;


		public function setCount($count) {
			$this->count = (int) $count;
		}

		public function getCount() {
			return (int) $this->count;
		}


		public function setUnread($unread) {
			$this->unread = (int) $unread;
		}

		public function getUnread() {
			return (int) $this->unread;
		}


		public function setItems($items) {
			$this->items = (array) $items;
		}

		public function getItems() {
			return (array) $this->items;
		}


		public function setInRead($in_read) {
			$this->in_read = (int) $in_read;
		}

		public function getInRead() {
			return (int) $this->in_read;
		}


		public function setOutRead($out_read) {
			$this->out_read = (int) $out_read;
		}

		public function getOutRead() {
			return (int) $this->out_read;
		}




	}
?>