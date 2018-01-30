<?php

	namespace VkApiSDK\ApiTypes\Market;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class AddResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'market_item_id' 	 => true,
		];


		protected $market_item_id;


		public function setMarketItemId($market_item_id) {
			$this->market_item_id = (int) $market_item_id;
		}

		public function getMarketItemId() {
			return (int) $this->market_item_id;
		}




	}
?>