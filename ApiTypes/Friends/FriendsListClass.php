<?php

	namespace VkApiSDK\ApiTypes\Friends;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class FriendsListClass extends BaseType {

		protected static $requiredParams = ['name','id'];


		protected static $map = [
			'name' 	 => true,
			'id' 	 => true,
		];


		protected $name;
		protected $id;


		public function setName($name) {
			$this->name = $name;
		}

		public function getName() {
			return $this->name;
		}


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}




	}
?>