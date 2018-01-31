<?php

	namespace VkApiSDK\ApiTypes\Photos;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class PhotoUpload extends BaseType {

		protected static $requiredParams = ['upload_url','album_id','user_id'];


		protected static $map = [
			'upload_url' 	 => true,
			'album_id' 	 => true,
			'user_id' 	 => true,
		];


		protected $upload_url;
		protected $album_id;
		protected $user_id;


		public function setUploadUrl($upload_url) {
			$this->upload_url = $upload_url;
		}

		public function getUploadUrl() {
			return $this->upload_url;
		}


		public function setAlbumId($album_id) {
			$this->album_id = (int) $album_id;
		}

		public function getAlbumId() {
			return (int) $this->album_id;
		}


		public function setUserId($user_id) {
			$this->user_id = (int) $user_id;
		}

		public function getUserId() {
			return (int) $this->user_id;
		}




	}
?>