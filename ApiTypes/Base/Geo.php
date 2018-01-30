<?php

	namespace VkApiSDK\ApiTypes\Base;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Geo extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'type' 	 => true,
			'coordinates' 	 => true,
			'place' 	 => ApiTypes\Base\Place::class,
			'showmap' 	 => true,
		];


		protected $type;
		protected $coordinates;
		protected $place;
		protected $showmap;


		public function setType($type) {
			$this->type = $type;
		}

		public function getType() {
			return $this->type;
		}


		public function setCoordinates($coordinates) {
			$this->coordinates = $coordinates;
		}

		public function getCoordinates() {
			return $this->coordinates;
		}


		public function setPlace($place) {
			$this->place = $place;
		}

		public function getPlace() {
			return $this->place;
		}


		public function setShowmap($showmap) {
			$this->showmap = (int) $showmap;
		}

		public function getShowmap() {
			return (int) $this->showmap;
		}




	}
?>