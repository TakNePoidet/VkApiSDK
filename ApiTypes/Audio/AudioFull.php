<?php

	namespace VkApiSDK\ApiTypes\Audio;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class AudioFull extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'owner_id' 	 => true,
			'artist' 	 => true,
			'title' 	 => true,
			'url' 	 => true,
			'access_key' 	 => true,
			'duration' 	 => true,
			'date' 	 => true,
			'album_id' 	 => true,
			'lyrics_id' 	 => true,
			'genre_id' 	 => true,
			'no_search' 	 => ApiTypes\Base\BoolInt::class,
			'is_hq' 	 => ApiTypes\Base\BoolInt::class,
		];


		protected $id;
		protected $owner_id;
		protected $artist;
		protected $title;
		protected $url;
		protected $access_key;
		protected $duration;
		protected $date;
		protected $album_id;
		protected $lyrics_id;
		protected $genre_id;
		protected $no_search;
		protected $is_hq;


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


		public function setDuration($duration) {
			$this->duration = (int) $duration;
		}

		public function getDuration() {
			return (int) $this->duration;
		}


		public function setDate($date) {
			$this->date = (int) $date;
		}

		public function getDate() {
			return (int) $this->date;
		}


		public function setAlbumId($album_id) {
			$this->album_id = (int) $album_id;
		}

		public function getAlbumId() {
			return (int) $this->album_id;
		}


		public function setLyricsId($lyrics_id) {
			$this->lyrics_id = (int) $lyrics_id;
		}

		public function getLyricsId() {
			return (int) $this->lyrics_id;
		}


		public function setGenreId($genre_id) {
			$this->genre_id = (int) $genre_id;
		}

		public function getGenreId() {
			return (int) $this->genre_id;
		}


		public function setNoSearch($no_search) {
			$this->no_search = $no_search;
		}

		public function getNoSearch() {
			return $this->no_search;
		}


		public function setIsHq($is_hq) {
			$this->is_hq = $is_hq;
		}

		public function getIsHq() {
			return $this->is_hq;
		}




	}
?>