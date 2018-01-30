<?php

	namespace VkApiSDK\ApiTypes\Ads;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Criteria extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'sex' 	 => true,
			'age_from' 	 => true,
			'age_to' 	 => true,
			'birthday' 	 => true,
			'country' 	 => true,
			'cities' 	 => true,
			'cities_not' 	 => true,
			'statuses' 	 => true,
			'groups' 	 => true,
			'apps' 	 => true,
			'apps_not' 	 => true,
			'districts' 	 => true,
			'stations' 	 => true,
			'streets' 	 => true,
			'schools' 	 => true,
			'positions' 	 => true,
			'religions' 	 => true,
			'interests' 	 => true,
			'interest_categories' 	 => true,
			'user_devices' 	 => true,
			'user_os' 	 => true,
			'user_browsers' 	 => true,
			'retargeting_groups' 	 => true,
			'retargeting_groups_not' 	 => true,
			'paying' 	 => ApiTypes\Base\BoolInt::class,
			'travellers' 	 => ApiTypes\Base\PropertyExists::class,
			'school_from' 	 => true,
			'school_to' 	 => true,
			'uni_from' 	 => true,
			'uni_to' 	 => true,
		];


		protected $sex;
		protected $age_from;
		protected $age_to;
		protected $birthday;
		protected $country;
		protected $cities;
		protected $cities_not;
		protected $statuses;
		protected $groups;
		protected $apps;
		protected $apps_not;
		protected $districts;
		protected $stations;
		protected $streets;
		protected $schools;
		protected $positions;
		protected $religions;
		protected $interests;
		protected $interest_categories;
		protected $user_devices;
		protected $user_os;
		protected $user_browsers;
		protected $retargeting_groups;
		protected $retargeting_groups_not;
		protected $paying;
		protected $travellers;
		protected $school_from;
		protected $school_to;
		protected $uni_from;
		protected $uni_to;


		public function setSex($sex) {
			$this->sex = (int) $sex;
		}

		public function getSex() {
			return (int) $this->sex;
		}


		public function setAgeFrom($age_from) {
			$this->age_from = (int) $age_from;
		}

		public function getAgeFrom() {
			return (int) $this->age_from;
		}


		public function setAgeTo($age_to) {
			$this->age_to = (int) $age_to;
		}

		public function getAgeTo() {
			return (int) $this->age_to;
		}


		public function setBirthday($birthday) {
			$this->birthday = (int) $birthday;
		}

		public function getBirthday() {
			return (int) $this->birthday;
		}


		public function setCountry($country) {
			$this->country = (int) $country;
		}

		public function getCountry() {
			return (int) $this->country;
		}


		public function setCities($cities) {
			$this->cities = $cities;
		}

		public function getCities() {
			return $this->cities;
		}


		public function setCitiesNot($cities_not) {
			$this->cities_not = $cities_not;
		}

		public function getCitiesNot() {
			return $this->cities_not;
		}


		public function setStatuses($statuses) {
			$this->statuses = $statuses;
		}

		public function getStatuses() {
			return $this->statuses;
		}


		public function setGroups($groups) {
			$this->groups = $groups;
		}

		public function getGroups() {
			return $this->groups;
		}


		public function setApps($apps) {
			$this->apps = $apps;
		}

		public function getApps() {
			return $this->apps;
		}


		public function setAppsNot($apps_not) {
			$this->apps_not = $apps_not;
		}

		public function getAppsNot() {
			return $this->apps_not;
		}


		public function setDistricts($districts) {
			$this->districts = $districts;
		}

		public function getDistricts() {
			return $this->districts;
		}


		public function setStations($stations) {
			$this->stations = $stations;
		}

		public function getStations() {
			return $this->stations;
		}


		public function setStreets($streets) {
			$this->streets = $streets;
		}

		public function getStreets() {
			return $this->streets;
		}


		public function setSchools($schools) {
			$this->schools = $schools;
		}

		public function getSchools() {
			return $this->schools;
		}


		public function setPositions($positions) {
			$this->positions = $positions;
		}

		public function getPositions() {
			return $this->positions;
		}


		public function setReligions($religions) {
			$this->religions = $religions;
		}

		public function getReligions() {
			return $this->religions;
		}


		public function setInterests($interests) {
			$this->interests = $interests;
		}

		public function getInterests() {
			return $this->interests;
		}


		public function setInterestCategories($interest_categories) {
			$this->interest_categories = $interest_categories;
		}

		public function getInterestCategories() {
			return $this->interest_categories;
		}


		public function setUserDevices($user_devices) {
			$this->user_devices = $user_devices;
		}

		public function getUserDevices() {
			return $this->user_devices;
		}


		public function setUserOs($user_os) {
			$this->user_os = $user_os;
		}

		public function getUserOs() {
			return $this->user_os;
		}


		public function setUserBrowsers($user_browsers) {
			$this->user_browsers = $user_browsers;
		}

		public function getUserBrowsers() {
			return $this->user_browsers;
		}


		public function setRetargetingGroups($retargeting_groups) {
			$this->retargeting_groups = $retargeting_groups;
		}

		public function getRetargetingGroups() {
			return $this->retargeting_groups;
		}


		public function setRetargetingGroupsNot($retargeting_groups_not) {
			$this->retargeting_groups_not = $retargeting_groups_not;
		}

		public function getRetargetingGroupsNot() {
			return $this->retargeting_groups_not;
		}


		public function setPaying($paying) {
			$this->paying = $paying;
		}

		public function getPaying() {
			return $this->paying;
		}


		public function setTravellers($travellers) {
			$this->travellers = $travellers;
		}

		public function getTravellers() {
			return $this->travellers;
		}


		public function setSchoolFrom($school_from) {
			$this->school_from = (int) $school_from;
		}

		public function getSchoolFrom() {
			return (int) $this->school_from;
		}


		public function setSchoolTo($school_to) {
			$this->school_to = (int) $school_to;
		}

		public function getSchoolTo() {
			return (int) $this->school_to;
		}


		public function setUniFrom($uni_from) {
			$this->uni_from = (int) $uni_from;
		}

		public function getUniFrom() {
			return (int) $this->uni_from;
		}


		public function setUniTo($uni_to) {
			$this->uni_to = (int) $uni_to;
		}

		public function getUniTo() {
			return (int) $this->uni_to;
		}




	}
?>