<?php

	namespace VkApiSDK\ApiTypes\Wall;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class RepostResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'success' 	 => ApiTypes\Base\OkResponse::class,
			'post_id' 	 => true,
			'reposts_count' 	 => true,
			'likes_count' 	 => true,
		];


		protected $success;
		protected $post_id;
		protected $reposts_count;
		protected $likes_count;


		public function setSuccess($success) {
			$this->success = $success;
		}

		public function getSuccess() {
			return $this->success;
		}


		public function setPostId($post_id) {
			$this->post_id = (int) $post_id;
		}

		public function getPostId() {
			return (int) $this->post_id;
		}


		public function setRepostsCount($reposts_count) {
			$this->reposts_count = (int) $reposts_count;
		}

		public function getRepostsCount() {
			return (int) $this->reposts_count;
		}


		public function setLikesCount($likes_count) {
			$this->likes_count = (int) $likes_count;
		}

		public function getLikesCount() {
			return (int) $this->likes_count;
		}




	}
?>