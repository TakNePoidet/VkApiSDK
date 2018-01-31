<?php

	namespace VkApiSDK\ApiTypes\Base;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class ObjectWithName extends BaseType {

		protected static $requiredParams = ['id','name'];


		protected static $map = [
			'id' 	 => true,
			'name' 	 => true,
		];


		protected $id;
		protected $name;


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