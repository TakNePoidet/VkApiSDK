<?php

	namespace VkApiSDK\ApiTypes\Widgets;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetPagesResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'count' 	 => true,
			'pages' 	 => array(ApiTypes\Widgets\WidgetPage::class),
		];


		protected $count;
		protected $pages;


		public function setCount($count) {
			$this->count = (int) $count;
		}

		public function getCount() {
			return (int) $this->count;
		}


		public function setPages($pages) {
			$this->pages = (array) $pages;
		}

		public function getPages() {
			return (array) $this->pages;
		}




	}
?>