<?php

	namespace VkApiSDK\ApiTypes\Stats;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Country extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'visitors' 	 => true,
			'value' 	 => true,
			'code' 	 => true,
			'name' 	 => true,
		];


		protected $visitors;
		protected $value;
		protected $code;
		protected $name;


		public function setVisitors($visitors) {
			$this->visitors = (int) $visitors;
		}

		public function getVisitors() {
			return (int) $this->visitors;
		}


		public function setValue($value) {
			$this->value = (int) $value;
		}

		public function getValue() {
			return (int) $this->value;
		}


		public function setCode($code) {
			$this->code = $code;
		}

		public function getCode() {
			return $this->code;
		}


		public function setName($name) {
			$this->name = $name;
		}

		public function getName() {
			return $this->name;
		}




	}
?>