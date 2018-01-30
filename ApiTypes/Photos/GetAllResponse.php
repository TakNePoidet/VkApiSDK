<?php

	namespace VkApiSDK\ApiTypes\Photos;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetAllResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'count' 	 => true,
			'items' 	 => array(ApiTypes\Photos\PhotoXtrRealOffset::class),
			'more' 	 => ApiTypes\Base\BoolInt::class,
		];


		protected $count;
		protected $items;
		protected $more;


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


		public function setMore($more) {
			$this->more = $more;
		}

		public function getMore() {
			return $this->more;
		}




	}
?>