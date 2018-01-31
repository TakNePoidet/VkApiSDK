<?php

	namespace VkApiSDK\ApiTypes\Users;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class School extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'country' 	 => true,
			'city' 	 => true,
			'name' 	 => true,
			'year_from' 	 => true,
			'year_to' 	 => true,
			'year_graduated' 	 => true,
			'class' 	 => true,
			'type' 	 => true,
			'type_str' 	 => true,
		];


		protected $id;
		protected $country;
		protected $city;
		protected $name;
		protected $year_from;
		protected $year_to;
		protected $year_graduated;
		protected $class;
		protected $type;
		protected $type_str;


		public function setId($id) {
			$this->id = $id;
		}

		public function getId() {
			return $this->id;
		}


		public function setCountry($country) {
			$this->country = (int) $country;
		}

		public function getCountry() {
			return (int) $this->country;
		}


		public function setCity($city) {
			$this->city = (int) $city;
		}

		public function getCity() {
			return (int) $this->city;
		}


		public function setName($name) {
			$this->name = $name;
		}

		public function getName() {
			return $this->name;
		}


		public function setYearFrom($year_from) {
			$this->year_from = (int) $year_from;
		}

		public function getYearFrom() {
			return (int) $this->year_from;
		}


		public function setYearTo($year_to) {
			$this->year_to = (int) $year_to;
		}

		public function getYearTo() {
			return (int) $this->year_to;
		}


		public function setYearGraduated($year_graduated) {
			$this->year_graduated = (int) $year_graduated;
		}

		public function getYearGraduated() {
			return (int) $this->year_graduated;
		}


		public function setClass($class) {
			$this->class = $class;
		}

		public function getClass() {
			return $this->class;
		}


		public function setType($type) {
			$this->type = (int) $type;
		}

		public function getType() {
			return (int) $this->type;
		}


		public function setTypeStr($type_str) {
			$this->type_str = $type_str;
		}

		public function getTypeStr() {
			return $this->type_str;
		}




	}
?>