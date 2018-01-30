<?php

	namespace VkApiSDK\ApiTypes\Status;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Status extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'text' 	 => true,
			'audio' 	 => ApiTypes\Audio\AudioFull::class,
		];


		protected $text;
		protected $audio;


		public function setText($text) {
			$this->text = $text;
		}

		public function getText() {
			return $this->text;
		}


		public function setAudio($audio) {
			$this->audio = $audio;
		}

		public function getAudio() {
			return $this->audio;
		}




	}
?>