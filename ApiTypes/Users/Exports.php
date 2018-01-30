<?php

	namespace VkApiSDK\ApiTypes\Users;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Exports extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'twitter' 	 => true,
			'facebook' 	 => true,
			'livejournal' 	 => true,
		];


		protected $twitter;
		protected $facebook;
		protected $livejournal;


		public function setTwitter($twitter) {
			$this->twitter = (int) $twitter;
		}

		public function getTwitter() {
			return (int) $this->twitter;
		}


		public function setFacebook($facebook) {
			$this->facebook = (int) $facebook;
		}

		public function getFacebook() {
			return (int) $this->facebook;
		}


		public function setLivejournal($livejournal) {
			$this->livejournal = (int) $livejournal;
		}

		public function getLivejournal() {
			return (int) $this->livejournal;
		}




	}
?>