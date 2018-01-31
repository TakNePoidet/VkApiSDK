<?php

	namespace VkApiSDK\ApiTypes\Base;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Sticker extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'product_id' 	 => true,
			'photo_64' 	 => true,
			'photo_128' 	 => true,
			'photo_256' 	 => true,
			'photo_352' 	 => true,
			'width' 	 => true,
			'height' 	 => true,
		];


		protected $id;
		protected $product_id;
		protected $photo_64;
		protected $photo_128;
		protected $photo_256;
		protected $photo_352;
		protected $width;
		protected $height;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setProductId($product_id) {
			$this->product_id = (int) $product_id;
		}

		public function getProductId() {
			return (int) $this->product_id;
		}


		public function setPhoto64($photo_64) {
			$this->photo_64 = $photo_64;
		}

		public function getPhoto64() {
			return $this->photo_64;
		}


		public function setPhoto128($photo_128) {
			$this->photo_128 = $photo_128;
		}

		public function getPhoto128() {
			return $this->photo_128;
		}


		public function setPhoto256($photo_256) {
			$this->photo_256 = $photo_256;
		}

		public function getPhoto256() {
			return $this->photo_256;
		}


		public function setPhoto352($photo_352) {
			$this->photo_352 = $photo_352;
		}

		public function getPhoto352() {
			return $this->photo_352;
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