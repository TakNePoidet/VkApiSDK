<?php

	namespace VkApiSDK\ApiTypes\Board;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetTopicsResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'count' 	 => true,
			'items' 	 => array(ApiTypes\Board\Topic::class),
			'default_order' 	 => ApiTypes\Board\DefaultOrder::class,
			'can_add_topics' 	 => ApiTypes\Base\BoolInt::class,
		];


		protected $count;
		protected $items;
		protected $default_order;
		protected $can_add_topics;


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


		public function setDefaultOrder($default_order) {
			$this->default_order = $default_order;
		}

		public function getDefaultOrder() {
			return $this->default_order;
		}


		public function setCanAddTopics($can_add_topics) {
			$this->can_add_topics = $can_add_topics;
		}

		public function getCanAddTopics() {
			return $this->can_add_topics;
		}




	}
?>