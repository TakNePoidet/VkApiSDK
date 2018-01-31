<?php

	namespace VkApiSDK\ApiTypes\Video;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class SaveResult extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'upload_url' 	 => true,
			'video_id' 	 => true,
			'owner_id' 	 => true,
			'title' 	 => true,
			'description' 	 => true,
		];


		protected $upload_url;
		protected $video_id;
		protected $owner_id;
		protected $title;
		protected $description;


		public function setUploadUrl($upload_url) {
			$this->upload_url = $upload_url;
		}

		public function getUploadUrl() {
			return $this->upload_url;
		}


		public function setVideoId($video_id) {
			$this->video_id = (int) $video_id;
		}

		public function getVideoId() {
			return (int) $this->video_id;
		}


		public function setOwnerId($owner_id) {
			$this->owner_id = (int) $owner_id;
		}

		public function getOwnerId() {
			return (int) $this->owner_id;
		}


		public function setTitle($title) {
			$this->title = $title;
		}

		public function getTitle() {
			return $this->title;
		}


		public function setDescription($description) {
			$this->description = $description;
		}

		public function getDescription() {
			return $this->description;
		}




	}
?>