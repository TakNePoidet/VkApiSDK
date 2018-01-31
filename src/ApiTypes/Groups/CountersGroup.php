<?php

	namespace VkApiSDK\ApiTypes\Groups;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class CountersGroup extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'photos' 	 => true,
			'albums' 	 => true,
			'topics' 	 => true,
			'videos' 	 => true,
			'audios' 	 => true,
			'docs' 	 => true,
			'market' 	 => true,
		];


		protected $photos;
		protected $albums;
		protected $topics;
		protected $videos;
		protected $audios;
		protected $docs;
		protected $market;


		public function setPhotos($photos) {
			$this->photos = (int) $photos;
		}

		public function getPhotos() {
			return (int) $this->photos;
		}


		public function setAlbums($albums) {
			$this->albums = (int) $albums;
		}

		public function getAlbums() {
			return (int) $this->albums;
		}


		public function setTopics($topics) {
			$this->topics = (int) $topics;
		}

		public function getTopics() {
			return (int) $this->topics;
		}


		public function setVideos($videos) {
			$this->videos = (int) $videos;
		}

		public function getVideos() {
			return (int) $this->videos;
		}


		public function setAudios($audios) {
			$this->audios = (int) $audios;
		}

		public function getAudios() {
			return (int) $this->audios;
		}


		public function setDocs($docs) {
			$this->docs = (int) $docs;
		}

		public function getDocs() {
			return (int) $this->docs;
		}


		public function setMarket($market) {
			$this->market = (int) $market;
		}

		public function getMarket() {
			return (int) $this->market;
		}




	}
?>