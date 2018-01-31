<?php

	namespace VkApiSDK\ApiTypes\Newsfeed;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class ItemTopic extends BaseType {

		protected static $requiredParams = ['post_id','text'];


		protected static $map = [
			'post_id' 	 => true,
			'text' 	 => true,
			'comments' 	 => ApiTypes\Base\CommentsInfo::class,
			'likes' 	 => ApiTypes\Base\LikesInfo::class,
		];


		protected $post_id;
		protected $text;
		protected $comments;
		protected $likes;


		public function setPostId($post_id) {
			$this->post_id = (int) $post_id;
		}

		public function getPostId() {
			return (int) $this->post_id;
		}


		public function setText($text) {
			$this->text = $text;
		}

		public function getText() {
			return $this->text;
		}


		public function setComments($comments) {
			$this->comments = $comments;
		}

		public function getComments() {
			return $this->comments;
		}


		public function setLikes($likes) {
			$this->likes = $likes;
		}

		public function getLikes() {
			return $this->likes;
		}




	}
?>