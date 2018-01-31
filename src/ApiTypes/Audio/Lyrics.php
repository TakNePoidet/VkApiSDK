<?php

	namespace VkApiSDK\ApiTypes\Audio;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Lyrics extends BaseType {

		protected static $requiredParams = ['lyrics_id','text'];


		protected static $map = [
			'lyrics_id' 	 => true,
			'text' 	 => true,
		];


		protected $lyrics_id;
		protected $text;


		public function setLyricsId($lyrics_id) {
			$this->lyrics_id = (int) $lyrics_id;
		}

		public function getLyricsId() {
			return (int) $this->lyrics_id;
		}


		public function setText($text) {
			$this->text = $text;
		}

		public function getText() {
			return $this->text;
		}




	}
?>