<?php

	namespace VkApiSDK\ApiTypes\Utils;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class LastShortenedLink extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'timestamp' 	 => true,
			'url' 	 => true,
			'short_url' 	 => true,
			'key' 	 => true,
			'views' 	 => true,
			'access_key' 	 => true,
		];


		protected $timestamp;
		protected $url;
		protected $short_url;
		protected $key;
		protected $views;
		protected $access_key;


		public function setTimestamp($timestamp) {
			$this->timestamp = (int) $timestamp;
		}

		public function getTimestamp() {
			return (int) $this->timestamp;
		}


		public function setUrl($url) {
			$this->url = $url;
		}

		public function getUrl() {
			return $this->url;
		}


		public function setShortUrl($short_url) {
			$this->short_url = $short_url;
		}

		public function getShortUrl() {
			return $this->short_url;
		}


		public function setKey($key) {
			$this->key = $key;
		}

		public function getKey() {
			return $this->key;
		}


		public function setViews($views) {
			$this->views = (int) $views;
		}

		public function getViews() {
			return (int) $this->views;
		}


		public function setAccessKey($access_key) {
			$this->access_key = $access_key;
		}

		public function getAccessKey() {
			return $this->access_key;
		}




	}
?>