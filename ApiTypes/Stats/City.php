<?php

	namespace VkApiSDK\ApiTypes\Stats;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class City extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'visitors' 	 => true,
			'value' 	 => true,
			'name' 	 => true,
		];


		protected $visitors;
		protected $value;
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


		public function setName($name) {
			$this->name = $name;
		}

		public function getName() {
			return $this->name;
		}




	}
?>