<?php

	namespace VkApiSDK\ApiTypes\Docs;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class DocUploadResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'file' 	 => true,
		];


		protected $file;


		public function setFile($file) {
			$this->file = $file;
		}

		public function getFile() {
			return $this->file;
		}




	}
?>