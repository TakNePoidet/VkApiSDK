<?php

	namespace VkApiSDK\ApiTypes\Wall;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class PostResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'post_id' 	 => true,
		];


		protected $post_id;


		public function setPostId($post_id) {
			$this->post_id = (int) $post_id;
		}

		public function getPostId() {
			return (int) $this->post_id;
		}




	}
?>