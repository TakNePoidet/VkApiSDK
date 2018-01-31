<?php

	namespace VkApiSDK\ApiTypes\Wall;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Graffiti extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'owner_id' 	 => true,
			'photo_200' 	 => true,
			'photo_586' 	 => true,
		];


		protected $id;
		protected $owner_id;
		protected $photo_200;
		protected $photo_586;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setOwnerId($owner_id) {
			$this->owner_id = (int) $owner_id;
		}

		public function getOwnerId() {
			return (int) $this->owner_id;
		}


		public function setPhoto200($photo_200) {
			$this->photo_200 = $photo_200;
		}

		public function getPhoto200() {
			return $this->photo_200;
		}


		public function setPhoto586($photo_586) {
			$this->photo_586 = $photo_586;
		}

		public function getPhoto586() {
			return $this->photo_586;
		}




	}
?>