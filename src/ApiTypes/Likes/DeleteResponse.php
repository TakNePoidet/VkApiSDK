<?php

	namespace VkApiSDK\ApiTypes\Likes;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class DeleteResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'likes' 	 => true,
		];


		protected $likes;


		public function setLikes($likes) {
			$this->likes = (int) $likes;
		}

		public function getLikes() {
			return (int) $this->likes;
		}




	}
?>