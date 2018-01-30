<?php

	namespace VkApiSDK\ApiTypes\Wall;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class AppPost extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'name' 	 => true,
			'photo_130' 	 => true,
			'photo_604' 	 => true,
		];


		protected $id;
		protected $name;
		protected $photo_130;
		protected $photo_604;


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


		public function setPhoto130($photo_130) {
			$this->photo_130 = $photo_130;
		}

		public function getPhoto130() {
			return $this->photo_130;
		}


		public function setPhoto604($photo_604) {
			$this->photo_604 = $photo_604;
		}

		public function getPhoto604() {
			return $this->photo_604;
		}




	}
?>