<?php

	namespace VkApiSDK\ApiTypes\Users;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class LastSeen extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'time' 	 => true,
			'platform' 	 => true,
		];


		protected $time;
		protected $platform;


		public function setTime($time) {
			$this->time = (int) $time;
		}

		public function getTime() {
			return (int) $this->time;
		}


		public function setPlatform($platform) {
			$this->platform = (int) $platform;
		}

		public function getPlatform() {
			return (int) $this->platform;
		}




	}
?>