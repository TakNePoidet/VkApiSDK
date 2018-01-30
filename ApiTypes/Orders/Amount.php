<?php

	namespace VkApiSDK\ApiTypes\Orders;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Amount extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'amounts' 	 => array(ApiTypes\Orders\AmountItem::class),
			'currency' 	 => true,
		];


		protected $amounts;
		protected $currency;


		public function setAmounts($amounts) {
			$this->amounts = (array) $amounts;
		}

		public function getAmounts() {
			return (array) $this->amounts;
		}


		public function setCurrency($currency) {
			$this->currency = $currency;
		}

		public function getCurrency() {
			return $this->currency;
		}




	}
?>