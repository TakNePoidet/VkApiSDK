<?php

	namespace VkApiSDK\ApiTypes\Base;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class RequestParam extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'key' 	 => true,
			'value' 	 => true,
		];


		protected $key;
		protected $value;


		public function setKey($key) {
			$this->key = $key;
		}

		public function getKey() {
			return $this->key;
		}


		public function setValue($value) {
			$this->value = $value;
		}

		public function getValue() {
			return $this->value;
		}




	}
?>