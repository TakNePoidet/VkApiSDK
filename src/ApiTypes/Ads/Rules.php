<?php

	namespace VkApiSDK\ApiTypes\Ads;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Rules extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'title' 	 => true,
			'paragraphs' 	 => array(ApiTypes\Ads\Paragraphs::class),
		];


		protected $title;
		protected $paragraphs;


		public function setTitle($title) {
			$this->title = $title;
		}

		public function getTitle() {
			return $this->title;
		}


		public function setParagraphs($paragraphs) {
			$this->paragraphs = (array) $paragraphs;
		}

		public function getParagraphs() {
			return (array) $this->paragraphs;
		}




	}
?>