<?php

	namespace VkApiSDK\ApiTypes\Base;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class LikesInfo extends BaseType {

		protected static $requiredParams = ['count','user_likes','can_like'];


		protected static $map = [
			'count' 	 => true,
			'user_likes' 	 => true,
			'can_like' 	 => ApiTypes\Base\BoolInt::class,
			'can_publish' 	 => ApiTypes\Base\BoolInt::class,
		];


		protected $count;
		protected $user_likes;
		protected $can_like;
		protected $can_publish;


		public function setCount($count) {
			$this->count = (int) $count;
		}

		public function getCount() {
			return (int) $this->count;
		}


		public function setUserLikes($user_likes) {
			$this->user_likes = (int) $user_likes;
		}

		public function getUserLikes() {
			return (int) $this->user_likes;
		}


		public function setCanLike($can_like) {
			$this->can_like = $can_like;
		}

		public function getCanLike() {
			return $this->can_like;
		}


		public function setCanPublish($can_publish) {
			$this->can_publish = $can_publish;
		}

		public function getCanPublish() {
			return $this->can_publish;
		}




	}
?>