<?php

	namespace VkApiSDK\ApiTypes\Users;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Personal extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'political' 	 => true,
			'langs' 	 => true,
			'religion' 	 => true,
			'inspired_by' 	 => true,
			'people_main' 	 => true,
			'life_main' 	 => true,
			'smoking' 	 => true,
			'alcohol' 	 => true,
		];


		protected $political;
		protected $langs;
		protected $religion;
		protected $inspired_by;
		protected $people_main;
		protected $life_main;
		protected $smoking;
		protected $alcohol;


		public function setPolitical($political) {
			$this->political = (int) $political;
		}

		public function getPolitical() {
			return (int) $this->political;
		}


		public function setLangs($langs) {
			$this->langs = (array) $langs;
		}

		public function getLangs() {
			return (array) $this->langs;
		}


		public function setReligion($religion) {
			$this->religion = $religion;
		}

		public function getReligion() {
			return $this->religion;
		}


		public function setInspiredBy($inspired_by) {
			$this->inspired_by = $inspired_by;
		}

		public function getInspiredBy() {
			return $this->inspired_by;
		}


		public function setPeopleMain($people_main) {
			$this->people_main = (int) $people_main;
		}

		public function getPeopleMain() {
			return (int) $this->people_main;
		}


		public function setLifeMain($life_main) {
			$this->life_main = (int) $life_main;
		}

		public function getLifeMain() {
			return (int) $this->life_main;
		}


		public function setSmoking($smoking) {
			$this->smoking = (int) $smoking;
		}

		public function getSmoking() {
			return (int) $this->smoking;
		}


		public function setAlcohol($alcohol) {
			$this->alcohol = (int) $alcohol;
		}

		public function getAlcohol() {
			return (int) $this->alcohol;
		}




	}
?>