<?php

	namespace VkApiSDK\ApiTypes\Groups;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Cover extends BaseType {

		protected static $requiredParams = ['enabled'];


		protected static $map = [
			'enabled' 	 => ApiTypes\Base\BoolInt::class,
			'images' 	 => array(ApiTypes\Base\Image::class),
		];


		protected $enabled;
		protected $images;


		public function setEnabled($enabled) {
			$this->enabled = $enabled;
		}

		public function getEnabled() {
			return $this->enabled;
		}


		public function setImages($images) {
			$this->images = (array) $images;
		}

		public function getImages() {
			return (array) $this->images;
		}




	}
?>