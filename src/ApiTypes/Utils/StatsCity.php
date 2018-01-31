<?php

	namespace VkApiSDK\ApiTypes\Utils;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class StatsCity extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'city_id' 	 => true,
			'views' 	 => true,
		];


		protected $city_id;
		protected $views;


		public function setCityId($city_id) {
			$this->city_id = (int) $city_id;
		}

		public function getCityId() {
			return (int) $this->city_id;
		}


		public function setViews($views) {
			$this->views = (int) $views;
		}

		public function getViews() {
			return (int) $this->views;
		}




	}
?>