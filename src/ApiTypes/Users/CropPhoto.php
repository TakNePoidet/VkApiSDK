<?php

	namespace VkApiSDK\ApiTypes\Users;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class CropPhoto extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'photo' 	 => ApiTypes\Photos\Photo::class,
			'crop' 	 => ApiTypes\Users\CropPhotoCrop::class,
			'rect' 	 => ApiTypes\Users\CropPhotoRect::class,
		];


		protected $photo;
		protected $crop;
		protected $rect;


		public function setPhoto($photo) {
			$this->photo = $photo;
		}

		public function getPhoto() {
			return $this->photo;
		}


		public function setCrop($crop) {
			$this->crop = $crop;
		}

		public function getCrop() {
			return $this->crop;
		}


		public function setRect($rect) {
			$this->rect = $rect;
		}

		public function getRect() {
			return $this->rect;
		}




	}
?>