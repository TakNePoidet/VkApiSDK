<?php

	namespace VkApiSDK\ApiTypes\Places;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Checkin extends BaseType {

		protected static $requiredParams = ['id','user_id','date'];


		protected static $map = [
			'id' 	 => true,
			'user_id' 	 => true,
			'date' 	 => true,
			'latitude' 	 => true,
			'longitude' 	 => true,
			'place_id' 	 => true,
			'text' 	 => true,
			'distance' 	 => true,
			'place_title' 	 => true,
			'place_country' 	 => true,
			'place_city' 	 => true,
			'place_type' 	 => true,
			'place_icon' 	 => true,
		];


		protected $id;
		protected $user_id;
		protected $date;
		protected $latitude;
		protected $longitude;
		protected $place_id;
		protected $text;
		protected $distance;
		protected $place_title;
		protected $place_country;
		protected $place_city;
		protected $place_type;
		protected $place_icon;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setUserId($user_id) {
			$this->user_id = (int) $user_id;
		}

		public function getUserId() {
			return (int) $this->user_id;
		}


		public function setDate($date) {
			$this->date = (int) $date;
		}

		public function getDate() {
			return (int) $this->date;
		}


		public function setLatitude($latitude) {
			$this->latitude = (int) $latitude;
		}

		public function getLatitude() {
			return (int) $this->latitude;
		}


		public function setLongitude($longitude) {
			$this->longitude = (int) $longitude;
		}

		public function getLongitude() {
			return (int) $this->longitude;
		}


		public function setPlaceId($place_id) {
			$this->place_id = (int) $place_id;
		}

		public function getPlaceId() {
			return (int) $this->place_id;
		}


		public function setText($text) {
			$this->text = $text;
		}

		public function getText() {
			return $this->text;
		}


		public function setDistance($distance) {
			$this->distance = (int) $distance;
		}

		public function getDistance() {
			return (int) $this->distance;
		}


		public function setPlaceTitle($place_title) {
			$this->place_title = $place_title;
		}

		public function getPlaceTitle() {
			return $this->place_title;
		}


		public function setPlaceCountry($place_country) {
			$this->place_country = (int) $place_country;
		}

		public function getPlaceCountry() {
			return (int) $this->place_country;
		}


		public function setPlaceCity($place_city) {
			$this->place_city = (int) $place_city;
		}

		public function getPlaceCity() {
			return (int) $this->place_city;
		}


		public function setPlaceType($place_type) {
			$this->place_type = $place_type;
		}

		public function getPlaceType() {
			return $this->place_type;
		}


		public function setPlaceIcon($place_icon) {
			$this->place_icon = $place_icon;
		}

		public function getPlaceIcon() {
			return $this->place_icon;
		}




	}
?>