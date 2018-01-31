<?php

	namespace VkApiSDK\ApiTypes\Streaming;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetServerUrlResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'endpoint' 	 => true,
			'key' 	 => true,
		];


		protected $endpoint;
		protected $key;


		public function setEndpoint($endpoint) {
			$this->endpoint = $endpoint;
		}

		public function getEndpoint() {
			return $this->endpoint;
		}


		public function setKey($key) {
			$this->key = $key;
		}

		public function getKey() {
			return $this->key;
		}




	}
?>