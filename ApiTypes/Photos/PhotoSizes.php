<?php

	namespace VkApiSDK\ApiTypes\Photos;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class PhotoSizes extends BaseType {

		protected static $requiredParams = ['src','width','height','type'];


		protected static $map = [
			'src' 	 => true,
			'width' 	 => true,
			'height' 	 => true,
			'type' 	 => true,
		];


		protected $src;
		protected $width;
		protected $height;
		protected $type;


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


		public function setType($type) {
			$this->type = $type;
		}

		public function getType() {
			return $this->type;
		}




	}
?>