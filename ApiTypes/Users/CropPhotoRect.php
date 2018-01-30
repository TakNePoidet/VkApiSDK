<?php

	namespace VkApiSDK\ApiTypes\Users;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class CropPhotoRect extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'x' 	 => true,
			'y' 	 => true,
			'x2' 	 => true,
			'y2' 	 => true,
		];


		protected $x;
		protected $y;
		protected $x2;
		protected $y2;


		public function setX($x) {
			$this->x = (int) $x;
		}

		public function getX() {
			return (int) $this->x;
		}


		public function setY($y) {
			$this->y = (int) $y;
		}

		public function getY() {
			return (int) $this->y;
		}


		public function setX2($x2) {
			$this->x2 = (int) $x2;
		}

		public function getX2() {
			return (int) $this->x2;
		}


		public function setY2($y2) {
			$this->y2 = (int) $y2;
		}

		public function getY2() {
			return (int) $this->y2;
		}




	}
?>