<?php

	namespace VkApiSDK\ApiTypes\Users;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class UserLim extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'photo' 	 => true,
			'name' 	 => true,
			'name_gen' 	 => true,
		];


		protected $id;
		protected $photo;
		protected $name;
		protected $name_gen;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setPhoto($photo) {
			$this->photo = $photo;
		}

		public function getPhoto() {
			return $this->photo;
		}


		public function setName($name) {
			$this->name = $name;
		}

		public function getName() {
			return $this->name;
		}


		public function setNameGen($name_gen) {
			$this->name_gen = $name_gen;
		}

		public function getNameGen() {
			return $this->name_gen;
		}




	}
?>