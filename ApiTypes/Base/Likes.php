<?php

	namespace VkApiSDK\ApiTypes\Base;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Likes extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'user_likes' 	 => ApiTypes\Base\BoolInt::class,
			'count' 	 => true,
		];


		protected $user_likes;
		protected $count;


		public function setUserLikes($user_likes) {
			$this->user_likes = $user_likes;
		}

		public function getUserLikes() {
			return $this->user_likes;
		}


		public function setCount($count) {
			$this->count = (int) $count;
		}

		public function getCount() {
			return (int) $this->count;
		}




	}
?>