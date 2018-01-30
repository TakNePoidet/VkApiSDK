<?php

	namespace VkApiSDK\ApiTypes\Market;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Price extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'amount' 	 => true,
			'currency' 	 => ApiTypes\Market\Currency::class,
			'text' 	 => true,
		];


		protected $amount;
		protected $currency;
		protected $text;


		public function setAmount($amount) {
			$this->amount = $amount;
		}

		public function getAmount() {
			return $this->amount;
		}


		public function setCurrency($currency) {
			$this->currency = $currency;
		}

		public function getCurrency() {
			return $this->currency;
		}


		public function setText($text) {
			$this->text = $text;
		}

		public function getText() {
			return $this->text;
		}




	}
?>