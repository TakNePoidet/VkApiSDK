<?php

	namespace VkApiSDK\ApiTypes\Utils;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class StatsCountry extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'country_id' 	 => true,
			'views' 	 => true,
		];


		protected $country_id;
		protected $views;


		public function setCountryId($country_id) {
			$this->country_id = (int) $country_id;
		}

		public function getCountryId() {
			return (int) $this->country_id;
		}


		public function setViews($views) {
			$this->views = (int) $views;
		}

		public function getViews() {
			return (int) $this->views;
		}




	}
?>