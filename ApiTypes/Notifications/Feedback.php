<?php

	namespace VkApiSDK\ApiTypes\Notifications;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Feedback extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'to_id' 	 => true,
			'from_id' 	 => true,
			'text' 	 => true,
			'likes' 	 => ApiTypes\Base\LikesInfo::class,
			'attachments' 	 => array(ApiTypes\Wall\WallpostAttachment::class),
			'geo' 	 => ApiTypes\Base\Geo::class,
		];


		protected $id;
		protected $to_id;
		protected $from_id;
		protected $text;
		protected $likes;
		protected $attachments;
		protected $geo;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setToId($to_id) {
			$this->to_id = (int) $to_id;
		}

		public function getToId() {
			return (int) $this->to_id;
		}


		public function setFromId($from_id) {
			$this->from_id = (int) $from_id;
		}

		public function getFromId() {
			return (int) $this->from_id;
		}


		public function setText($text) {
			$this->text = $text;
		}

		public function getText() {
			return $this->text;
		}


		public function setLikes($likes) {
			$this->likes = $likes;
		}

		public function getLikes() {
			return $this->likes;
		}


		public function setAttachments($attachments) {
			$this->attachments = (array) $attachments;
		}

		public function getAttachments() {
			return (array) $this->attachments;
		}


		public function setGeo($geo) {
			$this->geo = $geo;
		}

		public function getGeo() {
			return $this->geo;
		}




	}
?>