<?php

	namespace VkApiSDK\ApiTypes\Newsfeed;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class ItemVideo extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'video' 	 => ApiTypes\Newsfeed\ItemVideoVideo::class,
		];


		protected $video;


		public function setVideo($video) {
			$this->video = $video;
		}

		public function getVideo() {
			return $this->video;
		}




	}
?>