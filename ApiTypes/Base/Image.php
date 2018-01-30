<?php

	namespace VkApiSDK\ApiTypes\Base;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Image extends BaseType {

		protected static $requiredParams = ['url','width','height'];


		protected static $map = [
			'url' 	 => true,
			'width' 	 => true,
			'height' 	 => true,
		];


		protected $url;
		protected $width;
		protected $height;


		public function setUrl($url) {
			$this->url = $url;
		}

		public function getUrl() {
			return $this->url;
		}


		public function setWidth($width) {
			$this->width = (int) $width;
		}

		public function getWidth() {
			return (int) $this->width;
		}


		public function setHeight($height) {
			$this->height = (int) $height;
		}

		public function getHeight() {
			return (int) $this->height;
		}




	}
?>