<?php

	namespace VkApiSDK\ApiTypes\Messages;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class LastActivity extends BaseType {

		protected static $requiredParams = ['online','time'];


		protected static $map = [
			'online' 	 => ApiTypes\Base\BoolInt::class,
			'time' 	 => true,
		];


		protected $online;
		protected $time;


		public function setOnline($online) {
			$this->online = $online;
		}

		public function getOnline() {
			return $this->online;
		}


		public function setTime($time) {
			$this->time = (int) $time;
		}

		public function getTime() {
			return (int) $this->time;
		}




	}
?>