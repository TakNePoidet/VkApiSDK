<?php

	namespace VkApiSDK\ApiTypes\Wall;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class PostSource extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'type' 	 => true,
			'platform' 	 => true,
			'data' 	 => true,
			'url' 	 => true,
		];


		protected $type;
		protected $platform;
		protected $data;
		protected $url;


		public function setType($type) {
			$this->type = $type;
		}

		public function getType() {
			return $this->type;
		}


		public function setPlatform($platform) {
			$this->platform = $platform;
		}

		public function getPlatform() {
			return $this->platform;
		}


		public function setData($data) {
			$this->data = $data;
		}

		public function getData() {
			return $this->data;
		}


		public function setUrl($url) {
			$this->url = $url;
		}

		public function getUrl() {
			return $this->url;
		}




	}
?>