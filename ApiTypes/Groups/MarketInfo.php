<?php

	namespace VkApiSDK\ApiTypes\Groups;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class MarketInfo extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'enabled' 	 => ApiTypes\Base\BoolInt::class,
			'price_min' 	 => true,
			'price_max' 	 => true,
			'main_album_id' 	 => true,
			'contact_id' 	 => true,
			'currency' 	 => ApiTypes\Market\Currency::class,
			'currency_text' 	 => true,
		];


		protected $enabled;
		protected $price_min;
		protected $price_max;
		protected $main_album_id;
		protected $contact_id;
		protected $currency;
		protected $currency_text;


		public function setEnabled($enabled) {
			$this->enabled = $enabled;
		}

		public function getEnabled() {
			return $this->enabled;
		}


		public function setPriceMin($price_min) {
			$this->price_min = (int) $price_min;
		}

		public function getPriceMin() {
			return (int) $this->price_min;
		}


		public function setPriceMax($price_max) {
			$this->price_max = (int) $price_max;
		}

		public function getPriceMax() {
			return (int) $this->price_max;
		}


		public function setMainAlbumId($main_album_id) {
			$this->main_album_id = (int) $main_album_id;
		}

		public function getMainAlbumId() {
			return (int) $this->main_album_id;
		}


		public function setContactId($contact_id) {
			$this->contact_id = (int) $contact_id;
		}

		public function getContactId() {
			return (int) $this->contact_id;
		}


		public function setCurrency($currency) {
			$this->currency = $currency;
		}

		public function getCurrency() {
			return $this->currency;
		}


		public function setCurrencyText($currency_text) {
			$this->currency_text = $currency_text;
		}

		public function getCurrencyText() {
			return $this->currency_text;
		}




	}
?>