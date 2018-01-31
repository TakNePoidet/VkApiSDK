<?php

	namespace VkApiSDK\ApiTypes\Ads;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class TargetGroup extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'name' 	 => true,
			'domain' 	 => true,
			'audience_count' 	 => true,
			'lifetime' 	 => true,
			'pixel' 	 => true,
		];


		protected $id;
		protected $name;
		protected $domain;
		protected $audience_count;
		protected $lifetime;
		protected $pixel;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setName($name) {
			$this->name = $name;
		}

		public function getName() {
			return $this->name;
		}


		public function setDomain($domain) {
			$this->domain = $domain;
		}

		public function getDomain() {
			return $this->domain;
		}


		public function setAudienceCount($audience_count) {
			$this->audience_count = (int) $audience_count;
		}

		public function getAudienceCount() {
			return (int) $this->audience_count;
		}


		public function setLifetime($lifetime) {
			$this->lifetime = (int) $lifetime;
		}

		public function getLifetime() {
			return (int) $this->lifetime;
		}


		public function setPixel($pixel) {
			$this->pixel = $pixel;
		}

		public function getPixel() {
			return $this->pixel;
		}




	}
?>