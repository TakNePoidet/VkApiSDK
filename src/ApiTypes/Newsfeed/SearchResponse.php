<?php

	namespace VkApiSDK\ApiTypes\Newsfeed;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class SearchResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'items' 	 => array(ApiTypes\Wall\WallpostFull::class),
			'suggested_queries' 	 => true,
		];


		protected $items;
		protected $suggested_queries;


		public function setItems($items) {
			$this->items = (array) $items;
		}

		public function getItems() {
			return (array) $this->items;
		}


		public function setSuggestedQueries($suggested_queries) {
			$this->suggested_queries = (array) $suggested_queries;
		}

		public function getSuggestedQueries() {
			return (array) $this->suggested_queries;
		}




	}
?>