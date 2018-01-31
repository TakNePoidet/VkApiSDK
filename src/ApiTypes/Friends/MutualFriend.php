<?php

	namespace VkApiSDK\ApiTypes\Friends;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class MutualFriend extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'common_count' 	 => true,
			'common_friends' 	 => true,
		];


		protected $id;
		protected $common_count;
		protected $common_friends;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setCommonCount($common_count) {
			$this->common_count = (int) $common_count;
		}

		public function getCommonCount() {
			return (int) $this->common_count;
		}


		public function setCommonFriends($common_friends) {
			$this->common_friends = (array) $common_friends;
		}

		public function getCommonFriends() {
			return (array) $this->common_friends;
		}




	}
?>