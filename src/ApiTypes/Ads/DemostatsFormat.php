<?php

	namespace VkApiSDK\ApiTypes\Ads;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class DemostatsFormat extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'day' 	 => true,
			'month' 	 => true,
			'overall' 	 => true,
			'sex' 	 => array(ApiTypes\Ads\StatsSex::class),
			'age' 	 => array(ApiTypes\Ads\StatsAge::class),
			'sex_age' 	 => array(ApiTypes\Ads\StatsSexAge::class),
			'cities' 	 => array(ApiTypes\Ads\StatsCities::class),
		];


		protected $day;
		protected $month;
		protected $overall;
		protected $sex;
		protected $age;
		protected $sex_age;
		protected $cities;


		public function setDay($day) {
			$this->day = $day;
		}

		public function getDay() {
			return $this->day;
		}


		public function setMonth($month) {
			$this->month = $month;
		}

		public function getMonth() {
			return $this->month;
		}


		public function setOverall($overall) {
			$this->overall = (int) $overall;
		}

		public function getOverall() {
			return (int) $this->overall;
		}


		public function setSex($sex) {
			$this->sex = (array) $sex;
		}

		public function getSex() {
			return (array) $this->sex;
		}


		public function setAge($age) {
			$this->age = (array) $age;
		}

		public function getAge() {
			return (array) $this->age;
		}


		public function setSexAge($sex_age) {
			$this->sex_age = (array) $sex_age;
		}

		public function getSexAge() {
			return (array) $this->sex_age;
		}


		public function setCities($cities) {
			$this->cities = (array) $cities;
		}

		public function getCities() {
			return (array) $this->cities;
		}




	}
?>