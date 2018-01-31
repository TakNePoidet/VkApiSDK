<?php

	namespace VkApiSDK\ApiTypes\Utils;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Stats extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'timestamp' 	 => true,
			'views' 	 => true,
		];


		protected $timestamp;
		protected $views;


		public function setTimestamp($timestamp) {
			$this->timestamp = (int) $timestamp;
		}

		public function getTimestamp() {
			return (int) $this->timestamp;
		}


		public function setViews($views) {
			$this->views = (int) $views;
		}

		public function getViews() {
			return (int) $this->views;
		}




	}
?>