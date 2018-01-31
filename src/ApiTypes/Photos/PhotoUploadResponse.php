<?php

	namespace VkApiSDK\ApiTypes\Photos;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class PhotoUploadResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'server' 	 => true,
			'photos_list' 	 => true,
			'aid' 	 => true,
			'hash' 	 => true,
		];


		protected $server;
		protected $photos_list;
		protected $aid;
		protected $hash;


		public function setServer($server) {
			$this->server = (int) $server;
		}

		public function getServer() {
			return (int) $this->server;
		}


		public function setPhotosList($photos_list) {
			$this->photos_list = $photos_list;
		}

		public function getPhotosList() {
			return $this->photos_list;
		}


		public function setAid($aid) {
			$this->aid = (int) $aid;
		}

		public function getAid() {
			return (int) $this->aid;
		}


		public function setHash($hash) {
			$this->hash = $hash;
		}

		public function getHash() {
			return $this->hash;
		}




	}
?>