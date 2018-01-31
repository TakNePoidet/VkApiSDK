<?php

	namespace VkApiSDK\ApiTypes\Stats;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Period extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'day' 	 => true,
			'views' 	 => true,
			'visitors' 	 => true,
			'reach' 	 => true,
			'reach_subscribers' 	 => true,
			'subscribed' 	 => true,
			'unsubscribed' 	 => true,
			'sex' 	 => array(ApiTypes\Stats\Sex::class),
			'age' 	 => array(ApiTypes\Stats\Age::class),
			'sex_age' 	 => array(ApiTypes\Stats\SexAge::class),
			'cities' 	 => array(ApiTypes\Stats\City::class),
			'countries' 	 => array(ApiTypes\Stats\Country::class),
		];


		protected $day;
		protected $views;
		protected $visitors;
		protected $reach;
		protected $reach_subscribers;
		protected $subscribed;
		protected $unsubscribed;
		protected $sex;
		protected $age;
		protected $sex_age;
		protected $cities;
		protected $countries;


		public function setDay($day) {
			$this->day = $day;
		}

		public function getDay() {
			return $this->day;
		}


		public function setViews($views) {
			$this->views = (int) $views;
		}

		public function getViews() {
			return (int) $this->views;
		}


		public function setVisitors($visitors) {
			$this->visitors = (int) $visitors;
		}

		public function getVisitors() {
			return (int) $this->visitors;
		}


		public function setReach($reach) {
			$this->reach = (int) $reach;
		}

		public function getReach() {
			return (int) $this->reach;
		}


		public function setReachSubscribers($reach_subscribers) {
			$this->reach_subscribers = (int) $reach_subscribers;
		}

		public function getReachSubscribers() {
			return (int) $this->reach_subscribers;
		}


		public function setSubscribed($subscribed) {
			$this->subscribed = (int) $subscribed;
		}

		public function getSubscribed() {
			return (int) $this->subscribed;
		}


		public function setUnsubscribed($unsubscribed) {
			$this->unsubscribed = (int) $unsubscribed;
		}

		public function getUnsubscribed() {
			return (int) $this->unsubscribed;
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


		public function setCountries($countries) {
			$this->countries = (array) $countries;
		}

		public function getCountries() {
			return (array) $this->countries;
		}




	}
?>