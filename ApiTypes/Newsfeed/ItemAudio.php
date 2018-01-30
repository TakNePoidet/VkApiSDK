<?php

	namespace VkApiSDK\ApiTypes\Newsfeed;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class ItemAudio extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'audio' 	 => ApiTypes\Newsfeed\ItemAudioAudio::class,
			'post_id' 	 => true,
		];


		protected $audio;
		protected $post_id;


		public function setAudio($audio) {
			$this->audio = $audio;
		}

		public function getAudio() {
			return $this->audio;
		}


		public function setPostId($post_id) {
			$this->post_id = (int) $post_id;
		}

		public function getPostId() {
			return (int) $this->post_id;
		}




	}
?>