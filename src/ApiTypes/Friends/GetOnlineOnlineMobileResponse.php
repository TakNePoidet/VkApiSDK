<?php

	namespace VkApiSDK\ApiTypes\Friends;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetOnlineOnlineMobileResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'online' 	 => true,
			'online_mobile' 	 => true,
		];


		protected $online;
		protected $online_mobile;


		public function setOnline($online) {
			$this->online = (array) $online;
		}

		public function getOnline() {
			return (array) $this->online;
		}


		public function setOnlineMobile($online_mobile) {
			$this->online_mobile = (array) $online_mobile;
		}

		public function getOnlineMobile() {
			return (array) $this->online_mobile;
		}




	}
?>