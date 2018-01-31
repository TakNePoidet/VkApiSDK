<?php

	namespace VkApiSDK\ApiTypes\Wall;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class CreateCommentResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'comment_id' 	 => true,
		];


		protected $comment_id;


		public function setCommentId($comment_id) {
			$this->comment_id = (int) $comment_id;
		}

		public function getCommentId() {
			return (int) $this->comment_id;
		}




	}
?>