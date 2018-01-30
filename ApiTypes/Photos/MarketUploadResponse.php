<?php

	namespace VkApiSDK\ApiTypes\Photos;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class MarketUploadResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'group_id' 	 => true,
			'server' 	 => true,
			'photo' 	 => true,
			'hash' 	 => true,
			'crop_data' 	 => true,
			'crop_hash' 	 => true,
		];


		protected $group_id;
		protected $server;
		protected $photo;
		protected $hash;
		protected $crop_data;
		protected $crop_hash;


		public function setGroupId($group_id) {
			$this->group_id = (int) $group_id;
		}

		public function getGroupId() {
			return (int) $this->group_id;
		}


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


		public function setCropData($crop_data) {
			$this->crop_data = $crop_data;
		}

		public function getCropData() {
			return $this->crop_data;
		}


		public function setCropHash($crop_hash) {
			$this->crop_hash = $crop_hash;
		}

		public function getCropHash() {
			return $this->crop_hash;
		}




	}
?>