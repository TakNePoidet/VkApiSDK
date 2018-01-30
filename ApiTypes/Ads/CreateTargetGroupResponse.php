<?php

	namespace VkApiSDK\ApiTypes\Ads;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class CreateTargetGroupResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'pixel' 	 => true,
		];


		protected $id;
		protected $pixel;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setPixel($pixel) {
			$this->pixel = $pixel;
		}

		public function getPixel() {
			return $this->pixel;
		}




	}
?>