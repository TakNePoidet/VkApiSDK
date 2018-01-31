<?php

	namespace VkApiSDK\ApiTypes\Ads;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class StatsCities extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'impressions_rate' 	 => true,
			'clicks_rate' 	 => true,
			'value' 	 => true,
			'name' 	 => true,
		];


		protected $impressions_rate;
		protected $clicks_rate;
		protected $value;
		protected $name;


		public function setImpressionsRate($impressions_rate) {
			$this->impressions_rate = (int) $impressions_rate;
		}

		public function getImpressionsRate() {
			return (int) $this->impressions_rate;
		}


		public function setClicksRate($clicks_rate) {
			$this->clicks_rate = (int) $clicks_rate;
		}

		public function getClicksRate() {
			return (int) $this->clicks_rate;
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