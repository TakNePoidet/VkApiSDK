<?php

	namespace VkApiSDK\ApiTypes\Account;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class AccountCounters extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'friends' 	 => true,
			'messages' 	 => true,
			'photos' 	 => true,
			'videos' 	 => true,
			'gifts' 	 => true,
			'events' 	 => true,
			'groups' 	 => true,
			'notifications' 	 => true,
			'app_requests' 	 => true,
			'friends_suggestions' 	 => true,
		];


		protected $friends;
		protected $messages;
		protected $photos;
		protected $videos;
		protected $gifts;
		protected $events;
		protected $groups;
		protected $notifications;
		protected $app_requests;
		protected $friends_suggestions;


		public function setFriends($friends) {
			$this->friends = (int) $friends;
		}

		public function getFriends() {
			return (int) $this->friends;
		}


		public function setMessages($messages) {
			$this->messages = (int) $messages;
		}

		public function getMessages() {
			return (int) $this->messages;
		}


		public function setPhotos($photos) {
			$this->photos = (int) $photos;
		}

		public function getPhotos() {
			return (int) $this->photos;
		}


		public function setVideos($videos) {
			$this->videos = (int) $videos;
		}

		public function getVideos() {
			return (int) $this->videos;
		}


		public function setGifts($gifts) {
			$this->gifts = (int) $gifts;
		}

		public function getGifts() {
			return (int) $this->gifts;
		}


		public function setEvents($events) {
			$this->events = (int) $events;
		}

		public function getEvents() {
			return (int) $this->events;
		}


		public function setGroups($groups) {
			$this->groups = (int) $groups;
		}

		public function getGroups() {
			return (int) $this->groups;
		}


		public function setNotifications($notifications) {
			$this->notifications = (int) $notifications;
		}

		public function getNotifications() {
			return (int) $this->notifications;
		}


		public function setAppRequests($app_requests) {
			$this->app_requests = (int) $app_requests;
		}

		public function getAppRequests() {
			return (int) $this->app_requests;
		}


		public function setFriendsSuggestions($friends_suggestions) {
			$this->friends_suggestions = (int) $friends_suggestions;
		}

		public function getFriendsSuggestions() {
			return (int) $this->friends_suggestions;
		}




	}
?>