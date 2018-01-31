<?php

	namespace VkApiSDK\ApiTypes\Users;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class University extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'country' 	 => true,
			'city' 	 => true,
			'name' 	 => true,
			'faculty' 	 => true,
			'faculty_name' 	 => true,
			'chair' 	 => true,
			'chair_name' 	 => true,
			'graduation' 	 => true,
			'education_form' 	 => true,
			'education_status' 	 => true,
		];


		protected $id;
		protected $country;
		protected $city;
		protected $name;
		protected $faculty;
		protected $faculty_name;
		protected $chair;
		protected $chair_name;
		protected $graduation;
		protected $education_form;
		protected $education_status;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
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


		public function setFaculty($faculty) {
			$this->faculty = (int) $faculty;
		}

		public function getFaculty() {
			return (int) $this->faculty;
		}


		public function setFacultyName($faculty_name) {
			$this->faculty_name = $faculty_name;
		}

		public function getFacultyName() {
			return $this->faculty_name;
		}


		public function setChair($chair) {
			$this->chair = (int) $chair;
		}

		public function getChair() {
			return (int) $this->chair;
		}


		public function setChairName($chair_name) {
			$this->chair_name = $chair_name;
		}

		public function getChairName() {
			return $this->chair_name;
		}


		public function setGraduation($graduation) {
			$this->graduation = (int) $graduation;
		}

		public function getGraduation() {
			return (int) $this->graduation;
		}


		public function setEducationForm($education_form) {
			$this->education_form = $education_form;
		}

		public function getEducationForm() {
			return $this->education_form;
		}


		public function setEducationStatus($education_status) {
			$this->education_status = $education_status;
		}

		public function getEducationStatus() {
			return $this->education_status;
		}




	}
?>