<?php

	namespace VkApiSDK\ApiTypes\Docs;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class DocPreviewPhoto extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'sizes' 	 => array(ApiTypes\Photos\PhotoSizes::class),
		];


		protected $sizes;


		public function setSizes($sizes) {
			$this->sizes = (array) $sizes;
		}

		public function getSizes() {
			return (array) $this->sizes;
		}




	}
?>