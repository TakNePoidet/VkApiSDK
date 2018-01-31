<?php

	namespace VkApiSDK\ApiTypes\Utils;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class StatsSexAge extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'age_range' 	 => true,
			'female' 	 => true,
			'male' 	 => true,
		];


		protected $age_range;
		protected $female;
		protected $male;


		public function setAgeRange($age_range) {
			$this->age_range = $age_range;
		}

		public function getAgeRange() {
			return $this->age_range;
		}


		public function setFemale($female) {
			$this->female = (int) $female;
		}

		public function getFemale() {
			return (int) $this->female;
		}


		public function setMale($male) {
			$this->male = (int) $male;
		}

		public function getMale() {
			return (int) $this->male;
		}




	}
?>