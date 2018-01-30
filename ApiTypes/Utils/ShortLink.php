<?php

	namespace VkApiSDK\ApiTypes\Utils;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class ShortLink extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'short_url' 	 => true,
			'access_key' 	 => true,
			'key' 	 => true,
			'url' 	 => true,
		];


		protected $short_url;
		protected $access_key;
		protected $key;
		protected $url;


		public function setShortUrl($short_url) {
			$this->short_url = $short_url;
		}

		public function getShortUrl() {
			return $this->short_url;
		}


		public function setAccessKey($access_key) {
			$this->access_key = $access_key;
		}

		public function getAccessKey() {
			return $this->access_key;
		}


		public function setKey($key) {
			$this->key = $key;
		}

		public function getKey() {
			return $this->key;
		}


		public function setUrl($url) {
			$this->url = $url;
		}

		public function getUrl() {
			return $this->url;
		}




	}
?>