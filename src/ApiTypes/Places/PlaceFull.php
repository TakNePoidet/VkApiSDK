<?php

	namespace VkApiSDK\ApiTypes\Places;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class PlaceFull extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'title' 	 => true,
			'latitude' 	 => true,
			'longitude' 	 => true,
			'created' 	 => true,
			'icon' 	 => true,
			'checkins' 	 => true,
			'type' 	 => true,
			'country' 	 => true,
			'city' 	 => true,
			'address' 	 => true,
			'distance' 	 => true,
			'group_id' 	 => true,
			'group_photo' 	 => true,
		];


		protected $id;
		protected $title;
		protected $latitude;
		protected $longitude;
		protected $created;
		protected $icon;
		protected $checkins;
		protected $type;
		protected $country;
		protected $city;
		protected $address;
		protected $distance;
		protected $group_id;
		protected $group_photo;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setTitle($title) {
			$this->title = $title;
		}

		public function getTitle() {
			return $this->title;
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


		public function setCreated($created) {
			$this->created = (int) $created;
		}

		public function getCreated() {
			return (int) $this->created;
		}


		public function setIcon($icon) {
			$this->icon = $icon;
		}

		public function getIcon() {
			return $this->icon;
		}


		public function setCheckins($checkins) {
			$this->checkins = (int) $checkins;
		}

		public function getCheckins() {
			return (int) $this->checkins;
		}


		public function setType($type) {
			$this->type = $type;
		}

		public function getType() {
			return $this->type;
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


		public function setAddress($address) {
			$this->address = $address;
		}

		public function getAddress() {
			return $this->address;
		}


		public function setDistance($distance) {
			$this->distance = (int) $distance;
		}

		public function getDistance() {
			return (int) $this->distance;
		}


		public function setGroupId($group_id) {
			$this->group_id = (int) $group_id;
		}

		public function getGroupId() {
			return (int) $this->group_id;
		}


		public function setGroupPhoto($group_photo) {
			$this->group_photo = $group_photo;
		}

		public function getGroupPhoto() {
			return $this->group_photo;
		}




	}
?>