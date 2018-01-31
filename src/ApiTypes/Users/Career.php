<?php

	namespace VkApiSDK\ApiTypes\Users;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Career extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'group_id' 	 => true,
			'company' 	 => true,
			'country_id' 	 => true,
			'city_id' 	 => true,
			'from' 	 => true,
			'until' 	 => true,
			'position' 	 => true,
		];


		protected $group_id;
		protected $company;
		protected $country_id;
		protected $city_id;
		protected $from;
		protected $until;
		protected $position;


		public function setGroupId($group_id) {
			$this->group_id = (int) $group_id;
		}

		public function getGroupId() {
			return (int) $this->group_id;
		}


		public function setCompany($company) {
			$this->company = $company;
		}

		public function getCompany() {
			return $this->company;
		}


		public function setCountryId($country_id) {
			$this->country_id = (int) $country_id;
		}

		public function getCountryId() {
			return (int) $this->country_id;
		}


		public function setCityId($city_id) {
			$this->city_id = (int) $city_id;
		}

		public function getCityId() {
			return (int) $this->city_id;
		}


		public function setFrom($from) {
			$this->from = (int) $from;
		}

		public function getFrom() {
			return (int) $this->from;
		}


		public function setUntil($until) {
			$this->until = (int) $until;
		}

		public function getUntil() {
			return (int) $this->until;
		}


		public function setPosition($position) {
			$this->position = $position;
		}

		public function getPosition() {
			return $this->position;
		}




	}
?>