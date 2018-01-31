<?php

	namespace VkApiSDK\ApiTypes\Video;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetCatalogSectionResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'items' 	 => array(ApiTypes\Video\CatElement::class),
			'next' 	 => true,
		];


		protected $items;
		protected $next;


		public function setItems($items) {
			$this->items = (array) $items;
		}

		public function getItems() {
			return (array) $this->items;
		}


		public function setNext($next) {
			$this->next = $next;
		}

		public function getNext() {
			return $this->next;
		}




	}
?>