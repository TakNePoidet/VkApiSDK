<?php

	namespace VkApiSDK\ApiTypes\Notifications;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class NotificationParent extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'from_id' 	 => true,
			'to_id' 	 => true,
			'date' 	 => true,
			'post_id' 	 => true,
			'post_type' 	 => ApiTypes\Wall\PostType::class,
			'text' 	 => true,
			'signer_id' 	 => true,
			'attachments' 	 => array(ApiTypes\Wall\WallpostAttachment::class),
			'geo' 	 => ApiTypes\Base\Geo::class,
			'post_source' 	 => ApiTypes\Wall\PostSource::class,
			'comments' 	 => ApiTypes\Base\CommentsInfo::class,
			'likes' 	 => ApiTypes\Base\LikesInfo::class,
			'reposts' 	 => ApiTypes\Base\RepostsInfo::class,
			'copy_owner_id' 	 => true,
			'copy_post_id' 	 => true,
		];


		protected $id;
		protected $from_id;
		protected $to_id;
		protected $date;
		protected $post_id;
		protected $post_type;
		protected $text;
		protected $signer_id;
		protected $attachments;
		protected $geo;
		protected $post_source;
		protected $comments;
		protected $likes;
		protected $reposts;
		protected $copy_owner_id;
		protected $copy_post_id;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setFromId($from_id) {
			$this->from_id = (int) $from_id;
		}

		public function getFromId() {
			return (int) $this->from_id;
		}


		public function setToId($to_id) {
			$this->to_id = (int) $to_id;
		}

		public function getToId() {
			return (int) $this->to_id;
		}


		public function setDate($date) {
			$this->date = (int) $date;
		}

		public function getDate() {
			return (int) $this->date;
		}


		public function setPostId($post_id) {
			$this->post_id = (int) $post_id;
		}

		public function getPostId() {
			return (int) $this->post_id;
		}


		public function setPostType($post_type) {
			$this->post_type = $post_type;
		}

		public function getPostType() {
			return $this->post_type;
		}


		public function setText($text) {
			$this->text = $text;
		}

		public function getText() {
			return $this->text;
		}


		public function setSignerId($signer_id) {
			$this->signer_id = (int) $signer_id;
		}

		public function getSignerId() {
			return (int) $this->signer_id;
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


		public function setPostSource($post_source) {
			$this->post_source = $post_source;
		}

		public function getPostSource() {
			return $this->post_source;
		}


		public function setComments($comments) {
			$this->comments = $comments;
		}

		public function getComments() {
			return $this->comments;
		}


		public function setLikes($likes) {
			$this->likes = $likes;
		}

		public function getLikes() {
			return $this->likes;
		}


		public function setReposts($reposts) {
			$this->reposts = $reposts;
		}

		public function getReposts() {
			return $this->reposts;
		}


		public function setCopyOwnerId($copy_owner_id) {
			$this->copy_owner_id = (int) $copy_owner_id;
		}

		public function getCopyOwnerId() {
			return (int) $this->copy_owner_id;
		}


		public function setCopyPostId($copy_post_id) {
			$this->copy_post_id = (int) $copy_post_id;
		}

		public function getCopyPostId() {
			return (int) $this->copy_post_id;
		}




	}
?>