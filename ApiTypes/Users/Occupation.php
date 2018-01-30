<?php

	namespace VkApiSDK\ApiTypes\Users;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Occupation extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'type' 	 => true,
			'id' 	 => true,
			'name' 	 => true,
		];


		protected $type;
		protected $id;
		protected $name;


		public function setType($type) {
			$this->type = $type;
		}

		public function getType() {
			return $this->type;
		}


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




	}
?>