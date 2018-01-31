<?php

	namespace VkApiSDK\ApiTypes\Utils;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class LinkStats extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'key' 	 => true,
			'stats' 	 => array(ApiTypes\Utils\Stats::class),
		];


		protected $key;
		protected $stats;


		public function setKey($key) {
			$this->key = $key;
		}

		public function getKey() {
			return $this->key;
		}


		public function setStats($stats) {
			$this->stats = (array) $stats;
		}

		public function getStats() {
			return (array) $this->stats;
		}




	}
?>