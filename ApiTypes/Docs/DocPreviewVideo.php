<?php

	namespace VkApiSDK\ApiTypes\Docs;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class DocPreviewVideo extends BaseType {

		protected static $requiredParams = ['src','width','height','filesize'];


		protected static $map = [
			'src' 	 => true,
			'width' 	 => true,
			'height' 	 => true,
			'filesize' 	 => true,
		];


		protected $src;
		protected $width;
		protected $height;
		protected $filesize;


		public function setSrc($src) {
			$this->src = $src;
		}

		public function getSrc() {
			return $this->src;
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


		public function setFilesize($filesize) {
			$this->filesize = (int) $filesize;
		}

		public function getFilesize() {
			return (int) $this->filesize;
		}




	}
?>