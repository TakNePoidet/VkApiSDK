<?php

	namespace VkApiSDK\ApiTypes\Video;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class VideoFiles extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'mp_240' 	 => true,
			'mp_360' 	 => true,
			'mp_480' 	 => true,
			'mp_720' 	 => true,
			'mp_1080' 	 => true,
			'external' 	 => true,
		];


		protected $mp_240;
		protected $mp_360;
		protected $mp_480;
		protected $mp_720;
		protected $mp_1080;
		protected $external;


		public function setMp240($mp_240) {
			$this->mp_240 = $mp_240;
		}

		public function getMp240() {
			return $this->mp_240;
		}


		public function setMp360($mp_360) {
			$this->mp_360 = $mp_360;
		}

		public function getMp360() {
			return $this->mp_360;
		}


		public function setMp480($mp_480) {
			$this->mp_480 = $mp_480;
		}

		public function getMp480() {
			return $this->mp_480;
		}


		public function setMp720($mp_720) {
			$this->mp_720 = $mp_720;
		}

		public function getMp720() {
			return $this->mp_720;
		}


		public function setMp1080($mp_1080) {
			$this->mp_1080 = $mp_1080;
		}

		public function getMp1080() {
			return $this->mp_1080;
		}


		public function setExternal($external) {
			$this->external = $external;
		}

		public function getExternal() {
			return $this->external;
		}




	}
?>