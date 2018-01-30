<?php

	namespace VkApiSDK\ApiTypes\Photos;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class WallUploadResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'server' 	 => true,
			'photo' 	 => true,
			'hash' 	 => true,
		];


		protected $server;
		protected $photo;
		protected $hash;


		public function setServer($server) {
			$this->server = (int) $server;
		}

		public function getServer() {
			return (int) $this->server;
		}


		public function setPhoto($photo) {
			$this->photo = $photo;
		}

		public function getPhoto() {
			return $this->photo;
		}


		public function setHash($hash) {
			$this->hash = $hash;
		}

		public function getHash() {
			return $this->hash;
		}




	}
?>