<?php

	namespace VkApiSDK\ApiTypes\Groups;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetCatalogInfoResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'enabled' 	 => true,
			'categories' 	 => array(ApiTypes\Groups\GroupCategory::class),
		];


		protected $enabled;
		protected $categories;


		public function setEnabled($enabled) {
			$this->enabled = (int) $enabled;
		}

		public function getEnabled() {
			return (int) $this->enabled;
		}


		public function setCategories($categories) {
			$this->categories = (array) $categories;
		}

		public function getCategories() {
			return (array) $this->categories;
		}




	}
?>