<?php

	namespace VkApiSDK\ApiTypes\Users;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class UserMin extends BaseType {

		protected static $requiredParams = ['id','first_name','last_name'];


		protected static $map = [
			'id' 	 => true,
			'first_name' 	 => true,
			'last_name' 	 => true,
			'deactivated' 	 => true,
			'hidden' 	 => true,
		];


		protected $id;
		protected $first_name;
		protected $last_name;
		protected $deactivated;
		protected $hidden;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setFirstName($first_name) {
			$this->first_name = $first_name;
		}

		public function getFirstName() {
			return $this->first_name;
		}


		public function setLastName($last_name) {
			$this->last_name = $last_name;
		}

		public function getLastName() {
			return $this->last_name;
		}


		public function setDeactivated($deactivated) {
			$this->deactivated = $deactivated;
		}

		public function getDeactivated() {
			return $this->deactivated;
		}


		public function setHidden($hidden) {
			$this->hidden = (int) $hidden;
		}

		public function getHidden() {
			return (int) $this->hidden;
		}




	}
?>