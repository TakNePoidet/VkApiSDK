<?php

	namespace VkApiSDK\ApiTypes\Fave;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class FavesLink extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'url' 	 => true,
			'title' 	 => true,
			'description' 	 => true,
			'photo_50' 	 => true,
			'photo_100' 	 => true,
			'photo_200' 	 => true,
		];


		protected $id;
		protected $url;
		protected $title;
		protected $description;
		protected $photo_50;
		protected $photo_100;
		protected $photo_200;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setUrl($url) {
			$this->url = $url;
		}

		public function getUrl() {
			return $this->url;
		}


		public function setTitle($title) {
			$this->title = $title;
		}

		public function getTitle() {
			return $this->title;
		}


		public function setDescription($description) {
			$this->description = $description;
		}

		public function getDescription() {
			return $this->description;
		}


		public function setPhoto50($photo_50) {
			$this->photo_50 = $photo_50;
		}

		public function getPhoto50() {
			return $this->photo_50;
		}


		public function setPhoto100($photo_100) {
			$this->photo_100 = $photo_100;
		}

		public function getPhoto100() {
			return $this->photo_100;
		}


		public function setPhoto200($photo_200) {
			$this->photo_200 = $photo_200;
		}

		public function getPhoto200() {
			return $this->photo_200;
		}




	}
?>