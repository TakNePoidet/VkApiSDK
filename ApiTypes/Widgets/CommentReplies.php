<?php

	namespace VkApiSDK\ApiTypes\Widgets;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class CommentReplies extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'count' 	 => true,
			'can_post' 	 => ApiTypes\Base\BoolInt::class,
			'replies' 	 => array(ApiTypes\Widgets\CommentRepliesItem::class),
		];


		protected $count;
		protected $can_post;
		protected $replies;


		public function setCount($count) {
			$this->count = (int) $count;
		}

		public function getCount() {
			return (int) $this->count;
		}


		public function setCanPost($can_post) {
			$this->can_post = $can_post;
		}

		public function getCanPost() {
			return $this->can_post;
		}


		public function setReplies($replies) {
			$this->replies = (array) $replies;
		}

		public function getReplies() {
			return (array) $this->replies;
		}




	}
?>