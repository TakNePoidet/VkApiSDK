<?php

	namespace VkApiSDK\ApiTypes\Ads;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Paragraphs extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'paragraph' 	 => true,
		];


		protected $paragraph;


		public function setParagraph($paragraph) {
			$this->paragraph = $paragraph;
		}

		public function getParagraph() {
			return $this->paragraph;
		}




	}
?>