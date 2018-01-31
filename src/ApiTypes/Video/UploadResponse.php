<?php

	namespace VkApiSDK\ApiTypes\Video;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class UploadResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'size' 	 => true,
			'video_id' 	 => true,
		];


		protected $size;
		protected $video_id;


		public function setSize($size) {
			$this->size = (int) $size;
		}

		public function getSize() {
			return (int) $this->size;
		}


		public function setVideoId($video_id) {
			$this->video_id = (int) $video_id;
		}

		public function getVideoId() {
			return (int) $this->video_id;
		}




	}
?>