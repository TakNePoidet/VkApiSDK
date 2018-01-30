<?php

	namespace VkApiSDK\ApiTypes\Groups;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class ContactsItem extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'user_id' 	 => true,
			'desc' 	 => true,
			'email' 	 => true,
			'phone' 	 => true,
		];


		protected $user_id;
		protected $desc;
		protected $email;
		protected $phone;


		public function setUserId($user_id) {
			$this->user_id = (int) $user_id;
		}

		public function getUserId() {
			return (int) $this->user_id;
		}


		public function setDesc($desc) {
			$this->desc = $desc;
		}

		public function getDesc() {
			return $this->desc;
		}


		public function setEmail($email) {
			$this->email = $email;
		}

		public function getEmail() {
			return $this->email;
		}


		public function setPhone($phone) {
			$this->phone = $phone;
		}

		public function getPhone() {
			return $this->phone;
		}




	}
?>