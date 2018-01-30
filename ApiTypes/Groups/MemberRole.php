<?php

	namespace VkApiSDK\ApiTypes\Groups;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class MemberRole extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'role' 	 => true,
		];


		protected $id;
		protected $role;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setRole($role) {
			$this->role = $role;
		}

		public function getRole() {
			return $this->role;
		}




	}
?>