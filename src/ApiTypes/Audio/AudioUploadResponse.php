<?php

	namespace VkApiSDK\ApiTypes\Audio;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class AudioUploadResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'redirect' 	 => true,
			'server' 	 => true,
			'audio' 	 => true,
			'hash' 	 => true,
		];


		protected $redirect;
		protected $server;
		protected $audio;
		protected $hash;


		public function setRedirect($redirect) {
			$this->redirect = $redirect;
		}

		public function getRedirect() {
			return $this->redirect;
		}


		public function setServer($server) {
			$this->server = (int) $server;
		}

		public function getServer() {
			return (int) $this->server;
		}


		public function setAudio($audio) {
			$this->audio = $audio;
		}

		public function getAudio() {
			return $this->audio;
		}


		public function setHash($hash) {
			$this->hash = $hash;
		}

		public function getHash() {
			return $this->hash;
		}




	}
?>