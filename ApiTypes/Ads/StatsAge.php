<?php

	namespace VkApiSDK\ApiTypes\Ads;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class StatsAge extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'impressions_rate' 	 => true,
			'clicks_rate' 	 => true,
			'value' 	 => true,
		];


		protected $impressions_rate;
		protected $clicks_rate;
		protected $value;


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
			$this->value = $value;
		}

		public function getValue() {
			return $this->value;
		}




	}
?>