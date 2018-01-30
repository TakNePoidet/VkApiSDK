<?php

	namespace VkApiSDK\ApiTypes\Photos;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetCommentsResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'count' 	 => true,
			'real_offset' 	 => true,
			'items' 	 => array(ApiTypes\Wall\WallComment::class),
		];


		protected $count;
		protected $real_offset;
		protected $items;


		public function setCount($count) {
			$this->count = (int) $count;
		}

		public function getCount() {
			return (int) $this->count;
		}


		public function setRealOffset($real_offset) {
			$this->real_offset = (int) $real_offset;
		}

		public function getRealOffset() {
			return (int) $this->real_offset;
		}


		public function setItems($items) {
			$this->items = (array) $items;
		}

		public function getItems() {
			return (array) $this->items;
		}




	}
?>