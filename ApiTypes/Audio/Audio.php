<?php

	namespace VkApiSDK\ApiTypes\Audio;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Audio extends BaseType {

		protected static $requiredParams = ['id','owner_id','artist','title'];


		protected static $map = [
			'id' 	 => true,
			'owner_id' 	 => true,
			'artist' 	 => true,
			'title' 	 => true,
			'url' 	 => true,
			'access_key' 	 => true,
		];


		protected $id;
		protected $owner_id;
		protected $artist;
		protected $title;
		protected $url;
		protected $access_key;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setOwnerId($owner_id) {
			$this->owner_id = (int) $owner_id;
		}

		public function getOwnerId() {
			return (int) $this->owner_id;
		}


		public function setArtist($artist) {
			$this->artist = $artist;
		}

		public function getArtist() {
			return $this->artist;
		}


		public function setTitle($title) {
			$this->title = $title;
		}

		public function getTitle() {
			return $this->title;
		}


		public function setUrl($url) {
			$this->url = $url;
		}

		public function getUrl() {
			return $this->url;
		}


		public function setAccessKey($access_key) {
			$this->access_key = $access_key;
		}

		public function getAccessKey() {
			return $this->access_key;
		}




	}
?>