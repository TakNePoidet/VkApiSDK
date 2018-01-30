<?php

	namespace VkApiSDK\ApiTypes\Base;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class LinkProduct extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'price' 	 => ApiTypes\Market\Price::class,
		];


		protected $price;


		public function setPrice($price) {
			$this->price = $price;
		}

		public function getPrice() {
			return $this->price;
		}




	}
?>