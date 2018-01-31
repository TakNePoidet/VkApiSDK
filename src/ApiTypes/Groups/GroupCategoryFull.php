<?php

	namespace VkApiSDK\ApiTypes\Groups;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GroupCategoryFull extends BaseType {

		protected static $requiredParams = ['id','name','page_count','page_previews'];


		protected static $map = [
			'id' 	 => true,
			'name' 	 => true,
			'subcategories' 	 => array(ApiTypes\Groups\GroupCategory::class),
			'page_count' 	 => true,
			'page_previews' 	 => array(ApiTypes\Groups\Group::class),
		];


		protected $id;
		protected $name;
		protected $subcategories;
		protected $page_count;
		protected $page_previews;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setName($name) {
			$this->name = $name;
		}

		public function getName() {
			return $this->name;
		}


		public function setSubcategories($subcategories) {
			$this->subcategories = (array) $subcategories;
		}

		public function getSubcategories() {
			return (array) $this->subcategories;
		}


		public function setPageCount($page_count) {
			$this->page_count = (int) $page_count;
		}

		public function getPageCount() {
			return (int) $this->page_count;
		}


		public function setPagePreviews($page_previews) {
			$this->page_previews = (array) $page_previews;
		}

		public function getPagePreviews() {
			return (array) $this->page_previews;
		}




	}
?>