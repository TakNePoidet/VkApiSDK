<?php

	namespace VkApiSDK\ApiTypes\Newsfeed;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class ItemFriend extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'friends' 	 => ApiTypes\Newsfeed\ItemFriendFriends::class,
		];


		protected $friends;


		public function setFriends($friends) {
			$this->friends = $friends;
		}

		public function getFriends() {
			return $this->friends;
		}




	}
?>