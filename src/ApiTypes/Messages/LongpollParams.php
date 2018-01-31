<?php

	namespace VkApiSDK\ApiTypes\Messages;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class LongpollParams extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'key' 	 => true,
			'server' 	 => true,
			'ts' 	 => true,
			'pts' 	 => true,
		];


		protected $key;
		protected $server;
		protected $ts;
		protected $pts;


		public function setKey($key) {
			$this->key = $key;
		}

		public function getKey() {
			return $this->key;
		}


		public function setServer($server) {
			$this->server = $server;
		}

		public function getServer() {
			return $this->server;
		}


		public function setTs($ts) {
			$this->ts = (int) $ts;
		}

		public function getTs() {
			return (int) $this->ts;
		}


		public function setPts($pts) {
			$this->pts = (int) $pts;
		}

		public function getPts() {
			return (int) $this->pts;
		}




	}
?>