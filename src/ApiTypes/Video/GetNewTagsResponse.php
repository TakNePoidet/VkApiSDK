<?php

	namespace VkApiSDK\ApiTypes\Video;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetNewTagsResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'count' 	 => true,
			'items' 	 => array(ApiTypes\Video\VideoTagInfo::class),
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