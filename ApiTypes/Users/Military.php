<?php

	namespace VkApiSDK\ApiTypes\Users;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Military extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'unit' 	 => true,
			'unit_id' 	 => true,
			'country_id' 	 => true,
			'from' 	 => true,
			'until' 	 => true,
		];


		protected $unit;
		protected $unit_id;
		protected $country_id;
		protected $from;
		protected $until;


		public function setUnit($unit) {
			$this->unit = $unit;
		}

		public function getUnit() {
			return $this->unit;
		}


		public function setUnitId($unit_id) {
			$this->unit_id = (int) $unit_id;
		}

		public function getUnitId() {
			return (int) $this->unit_id;
		}


		public function setCountryId($country_id) {
			$this->country_id = (int) $country_id;
		}

		public function getCountryId() {
			return (int) $this->country_id;
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




	}
?>