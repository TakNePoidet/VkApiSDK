<?php

	namespace VkApiSDK\ApiTypes\Newsfeed;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class ItemPhoto extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'photos' 	 => ApiTypes\Newsfeed\ItemPhotoPhotos::class,
			'post_id' 	 => true,
		];


		protected $photos;
		protected $post_id;


		public function setPhotos($photos) {
			$this->photos = $photos;
		}

		public function getPhotos() {
			return $this->photos;
		}


		public function setPostId($post_id) {
			$this->post_id = (int) $post_id;
		}

		public function getPostId() {
			return (int) $this->post_id;
		}




	}
?>