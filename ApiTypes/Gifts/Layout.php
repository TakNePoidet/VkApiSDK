<?php

	namespace VkApiSDK\ApiTypes\Gifts;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Layout extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'thumb_256' 	 => true,
			'thumb_96' 	 => true,
			'thumb_48' 	 => true,
		];


		protected $id;
		protected $thumb_256;
		protected $thumb_96;
		protected $thumb_48;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setThumb256($thumb_256) {
			$this->thumb_256 = $thumb_256;
		}

		public function getThumb256() {
			return $this->thumb_256;
		}


		public function setThumb96($thumb_96) {
			$this->thumb_96 = $thumb_96;
		}

		public function getThumb96() {
			return $this->thumb_96;
		}


		public function setThumb48($thumb_48) {
			$this->thumb_48 = $thumb_48;
		}

		public function getThumb48() {
			return $this->thumb_48;
		}




	}
?>