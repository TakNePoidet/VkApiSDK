<?php

	namespace VkApiSDK\ApiTypes\Board;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetCommentsResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'count' 	 => true,
			'items' 	 => array(ApiTypes\Board\TopicComment::class),
			'poll' 	 => ApiTypes\Board\TopicPoll::class,
		];


		protected $count;
		protected $items;
		protected $poll;


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


		public function setPoll($poll) {
			$this->poll = $poll;
		}

		public function getPoll() {
			return $this->poll;
		}




	}
?>