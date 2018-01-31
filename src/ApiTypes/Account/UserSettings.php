<?php

	namespace VkApiSDK\ApiTypes\Account;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class UserSettings extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'first_name' 	 => true,
			'last_name' 	 => true,
			'maiden_name' 	 => true,
			'screen_name' 	 => true,
			'sex' 	 => ApiTypes\Base\Sex::class,
			'relation' 	 => true,
			'relation_partner' 	 => ApiTypes\Users\UserMin::class,
			'relation_pending' 	 => true,
			'relation_requests' 	 => array(ApiTypes\Users\UserMin::class),
			'bdate' 	 => true,
			'bdate_visibility' 	 => true,
			'home_town' 	 => true,
			'country' 	 => ApiTypes\Base\Country::class,
			'city' 	 => ApiTypes\Base\Object::class,
			'status' 	 => true,
			'phone' 	 => true,
			'name_request' 	 => ApiTypes\Account\NameRequest::class,
		];


		protected $first_name;
		protected $last_name;
		protected $maiden_name;
		protected $screen_name;
		protected $sex;
		protected $relation;
		protected $relation_partner;
		protected $relation_pending;
		protected $relation_requests;
		protected $bdate;
		protected $bdate_visibility;
		protected $home_town;
		protected $country;
		protected $city;
		protected $status;
		protected $phone;
		protected $name_request;


		public function setFirstName($first_name) {
			$this->first_name = $first_name;
		}

		public function getFirstName() {
			return $this->first_name;
		}


		public function setLastName($last_name) {
			$this->last_name = $last_name;
		}

		public function getLastName() {
			return $this->last_name;
		}


		public function setMaidenName($maiden_name) {
			$this->maiden_name = $maiden_name;
		}

		public function getMaidenName() {
			return $this->maiden_name;
		}


		public function setScreenName($screen_name) {
			$this->screen_name = $screen_name;
		}

		public function getScreenName() {
			return $this->screen_name;
		}


		public function setSex($sex) {
			$this->sex = $sex;
		}

		public function getSex() {
			return $this->sex;
		}


		public function setRelation($relation) {
			$this->relation = (int) $relation;
		}

		public function getRelation() {
			return (int) $this->relation;
		}


		public function setRelationPartner($relation_partner) {
			$this->relation_partner = $relation_partner;
		}

		public function getRelationPartner() {
			return $this->relation_partner;
		}


		public function setRelationPending($relation_pending) {
			$this->relation_pending = (int) $relation_pending;
		}

		public function getRelationPending() {
			return (int) $this->relation_pending;
		}


		public function setRelationRequests($relation_requests) {
			$this->relation_requests = (array) $relation_requests;
		}

		public function getRelationRequests() {
			return (array) $this->relation_requests;
		}


		public function setBdate($bdate) {
			$this->bdate = $bdate;
		}

		public function getBdate() {
			return $this->bdate;
		}


		public function setBdateVisibility($bdate_visibility) {
			$this->bdate_visibility = (int) $bdate_visibility;
		}

		public function getBdateVisibility() {
			return (int) $this->bdate_visibility;
		}


		public function setHomeTown($home_town) {
			$this->home_town = $home_town;
		}

		public function getHomeTown() {
			return $this->home_town;
		}


		public function setCountry($country) {
			$this->country = $country;
		}

		public function getCountry() {
			return $this->country;
		}


		public function setCity($city) {
			$this->city = $city;
		}

		public function getCity() {
			return $this->city;
		}


		public function setStatus($status) {
			$this->status = $status;
		}

		public function getStatus() {
			return $this->status;
		}


		public function setPhone($phone) {
			$this->phone = $phone;
		}

		public function getPhone() {
			return $this->phone;
		}


		public function setNameRequest($name_request) {
			$this->name_request = $name_request;
		}

		public function getNameRequest() {
			return $this->name_request;
		}




	}
?>