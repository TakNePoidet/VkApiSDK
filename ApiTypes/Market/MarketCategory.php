<?php

	namespace VkApiSDK\ApiTypes\Market;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class MarketCategory extends BaseType {

		protected static $requiredParams = ['id','name','section'];


		protected static $map = [
			'id' 	 => true,
			'name' 	 => true,
			'section' 	 => ApiTypes\Market\Section::class,
		];


		protected $id;
		protected $name;
		protected $section;


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


		public function setSection($section) {
			$this->section = $section;
		}

		public function getSection() {
			return $this->section;
		}




	}
?>