<?php

	namespace VkApiSDK\ApiTypes\Groups;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GroupCategory extends BaseType {

		protected static $requiredParams = ['id','name'];


		protected static $map = [
			'id' 	 => true,
			'name' 	 => true,
			'subcategories' 	 => array(ApiTypes\Base\ObjectWithName::class),
		];


		protected $id;
		protected $name;
		protected $subcategories;


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




	}
?>