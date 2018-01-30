<?php

	namespace VkApiSDK\ApiTypes\Notifications;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class NotificationsComment extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'owner_id' 	 => true,
			'date' 	 => true,
			'text' 	 => true,
			'photo' 	 => ApiTypes\Photos\Photo::class,
			'video' 	 => ApiTypes\Video\Video::class,
			'post' 	 => ApiTypes\Wall\Wallpost::class,
			'topic' 	 => ApiTypes\Board\Topic::class,
		];


		protected $id;
		protected $owner_id;
		protected $date;
		protected $text;
		protected $photo;
		protected $video;
		protected $post;
		protected $topic;


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


		public function setDate($date) {
			$this->date = (int) $date;
		}

		public function getDate() {
			return (int) $this->date;
		}


		public function setText($text) {
			$this->text = $text;
		}

		public function getText() {
			return $this->text;
		}


		public function setPhoto($photo) {
			$this->photo = $photo;
		}

		public function getPhoto() {
			return $this->photo;
		}


		public function setVideo($video) {
			$this->video = $video;
		}

		public function getVideo() {
			return $this->video;
		}


		public function setPost($post) {
			$this->post = $post;
		}

		public function getPost() {
			return $this->post;
		}


		public function setTopic($topic) {
			$this->topic = $topic;
		}

		public function getTopic() {
			return $this->topic;
		}




	}
?>