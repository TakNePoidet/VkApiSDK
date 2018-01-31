<?php

	namespace VkApiSDK\ApiTypes\Newsfeed;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class ItemPhotoTag extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'photo_tags' 	 => ApiTypes\Newsfeed\ItemPhotoTagPhotoTags::class,
			'post_id' 	 => true,
		];


		protected $photo_tags;
		protected $post_id;


		public function setPhotoTags($photo_tags) {
			$this->photo_tags = $photo_tags;
		}

		public function getPhotoTags() {
			return $this->photo_tags;
		}


		public function setPostId($post_id) {
			$this->post_id = (int) $post_id;
		}

		public function getPostId() {
			return (int) $this->post_id;
		}




	}
?>