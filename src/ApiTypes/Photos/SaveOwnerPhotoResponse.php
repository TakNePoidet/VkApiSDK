<?php

	namespace VkApiSDK\ApiTypes\Photos;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class SaveOwnerPhotoResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'photo_hash' 	 => true,
			'photo_src' 	 => true,
		];


		protected $photo_hash;
		protected $photo_src;


		public function setPhotoHash($photo_hash) {
			$this->photo_hash = $photo_hash;
		}

		public function getPhotoHash() {
			return $this->photo_hash;
		}


		public function setPhotoSrc($photo_src) {
			$this->photo_src = $photo_src;
		}

		public function getPhotoSrc() {
			return $this->photo_src;
		}




	}
?>