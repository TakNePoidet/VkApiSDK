<?php

	namespace VkApiSDK\ApiTypes\Users;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Relative extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'type' 	 => true,
		];


		protected $id;
		protected $type;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setType($type) {
			$this->type = $type;
		}

		public function getType() {
			return $this->type;
		}




	}
?>