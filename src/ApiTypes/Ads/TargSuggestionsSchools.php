<?php

	namespace VkApiSDK\ApiTypes\Ads;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class TargSuggestionsSchools extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'name' 	 => true,
			'desc' 	 => true,
			'type' 	 => true,
			'parent' 	 => true,
		];


		protected $id;
		protected $name;
		protected $desc;
		protected $type;
		protected $parent;


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


		public function setDesc($desc) {
			$this->desc = $desc;
		}

		public function getDesc() {
			return $this->desc;
		}


		public function setType($type) {
			$this->type = $type;
		}

		public function getType() {
			return $this->type;
		}


		public function setParent($parent) {
			$this->parent = $parent;
		}

		public function getParent() {
			return $this->parent;
		}




	}
?>