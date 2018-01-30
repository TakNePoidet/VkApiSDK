<?php

	namespace VkApiSDK\ApiTypes\Docs;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetUploadServerResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'upload_url' 	 => true,
		];


		protected $upload_url;


		public function setUploadUrl($upload_url) {
			$this->upload_url = $upload_url;
		}

		public function getUploadUrl() {
			return $this->upload_url;
		}




	}
?>