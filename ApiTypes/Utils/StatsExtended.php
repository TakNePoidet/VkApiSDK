<?php

	namespace VkApiSDK\ApiTypes\Utils;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class StatsExtended extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'timestamp' 	 => true,
			'views' 	 => true,
			'sex_age' 	 => array(ApiTypes\Utils\StatsSexAge::class),
			'countries' 	 => array(ApiTypes\Utils\StatsCountry::class),
			'cities' 	 => array(ApiTypes\Utils\StatsCity::class),
		];


		protected $timestamp;
		protected $views;
		protected $sex_age;
		protected $countries;
		protected $cities;


		public function setTimestamp($timestamp) {
			$this->timestamp = (int) $timestamp;
		}

		public function getTimestamp() {
			return (int) $this->timestamp;
		}


		public function setViews($views) {
			$this->views = (int) $views;
		}

		public function getViews() {
			return (int) $this->views;
		}


		public function setSexAge($sex_age) {
			$this->sex_age = (array) $sex_age;
		}

		public function getSexAge() {
			return (array) $this->sex_age;
		}


		public function setCountries($countries) {
			$this->countries = (array) $countries;
		}

		public function getCountries() {
			return (array) $this->countries;
		}


		public function setCities($cities) {
			$this->cities = (array) $cities;
		}

		public function getCities() {
			return (array) $this->cities;
		}




	}
?>