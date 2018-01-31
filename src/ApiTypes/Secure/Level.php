<?php

	namespace VkApiSDK\ApiTypes\Secure;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Level extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'uid' 	 => true,
			'level' 	 => true,
		];


		protected $uid;
		protected $level;


		public function setUid($uid) {
			$this->uid = (int) $uid;
		}

		public function getUid() {
			return (int) $this->uid;
		}


		public function setLevel($level) {
			$this->level = (int) $level;
		}

		public function getLevel() {
			return (int) $this->level;
		}




	}
?>