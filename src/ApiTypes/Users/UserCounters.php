<?php

	namespace VkApiSDK\ApiTypes\Users;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class UserCounters extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'albums' 	 => true,
			'videos' 	 => true,
			'audios' 	 => true,
			'notes' 	 => true,
			'photos' 	 => true,
			'groups' 	 => true,
			'gifts' 	 => true,
			'friends' 	 => true,
			'online_friends' 	 => true,
			'user_photos' 	 => true,
			'user_videos' 	 => true,
			'followers' 	 => true,
			'subscriptions' 	 => true,
			'pages' 	 => true,
		];


		protected $albums;
		protected $videos;
		protected $audios;
		protected $notes;
		protected $photos;
		protected $groups;
		protected $gifts;
		protected $friends;
		protected $online_friends;
		protected $user_photos;
		protected $user_videos;
		protected $followers;
		protected $subscriptions;
		protected $pages;


		public function setAlbums($albums) {
			$this->albums = (int) $albums;
		}

		public function getAlbums() {
			return (int) $this->albums;
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


		public function setNotes($notes) {
			$this->notes = (int) $notes;
		}

		public function getNotes() {
			return (int) $this->notes;
		}


		public function setPhotos($photos) {
			$this->photos = (int) $photos;
		}

		public function getPhotos() {
			return (int) $this->photos;
		}


		public function setGroups($groups) {
			$this->groups = (int) $groups;
		}

		public function getGroups() {
			return (int) $this->groups;
		}


		public function setGifts($gifts) {
			$this->gifts = (int) $gifts;
		}

		public function getGifts() {
			return (int) $this->gifts;
		}


		public function setFriends($friends) {
			$this->friends = (int) $friends;
		}

		public function getFriends() {
			return (int) $this->friends;
		}


		public function setOnlineFriends($online_friends) {
			$this->online_friends = (int) $online_friends;
		}

		public function getOnlineFriends() {
			return (int) $this->online_friends;
		}


		public function setUserPhotos($user_photos) {
			$this->user_photos = (int) $user_photos;
		}

		public function getUserPhotos() {
			return (int) $this->user_photos;
		}


		public function setUserVideos($user_videos) {
			$this->user_videos = (int) $user_videos;
		}

		public function getUserVideos() {
			return (int) $this->user_videos;
		}


		public function setFollowers($followers) {
			$this->followers = (int) $followers;
		}

		public function getFollowers() {
			return (int) $this->followers;
		}


		public function setSubscriptions($subscriptions) {
			$this->subscriptions = (int) $subscriptions;
		}

		public function getSubscriptions() {
			return (int) $this->subscriptions;
		}


		public function setPages($pages) {
			$this->pages = (int) $pages;
		}

		public function getPages() {
			return (int) $this->pages;
		}




	}
?>