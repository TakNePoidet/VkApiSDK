<?php

	namespace VkApiSDK\ApiTypes\Stats;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class SexAge extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'visitors' 	 => true,
			'value' 	 => true,
		];


		protected $visitors;
		protected $value;


		public function setVisitors($visitors) {
			$this->visitors = (int) $visitors;
		}

		public function getVisitors() {
			return (int) $this->visitors;
		}


		public function setValue($value) {
			$this->value = $value;
		}

		public function getValue() {
			return $this->value;
		}




	}
?>