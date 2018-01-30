<?php

	namespace VkApiSDK\ApiTypes\Docs;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class DocPreview extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'photo' 	 => ApiTypes\Docs\DocPreviewPhoto::class,
			'video' 	 => ApiTypes\Docs\DocPreviewVideo::class,
		];


		protected $photo;
		protected $video;


		public function setPhoto($photo) {
			$this->photo = $photo;
		}

		public function getPhoto() {
			return $this->photo;
		}


		public function setVideo($video) {
			$this->video = $video;
		}

		public function getVideo() {
			return $this->video;
		}




	}
?>