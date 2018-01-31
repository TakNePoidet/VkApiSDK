<?php

	namespace VkApiSDK\ApiTypes\Newsfeed;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class ItemWallpost extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'post_id' 	 => true,
			'post_type' 	 => true,
			'text' 	 => true,
			'copy_history' 	 => array(ApiTypes\Wall\Wallpost::class),
			'attachments' 	 => array(ApiTypes\Wall\WallpostAttachment::class),
			'geo' 	 => ApiTypes\Base\Geo::class,
			'post_source' 	 => ApiTypes\Wall\PostSource::class,
			'comments' 	 => ApiTypes\Base\CommentsInfo::class,
			'likes' 	 => ApiTypes\Base\LikesInfo::class,
			'reposts' 	 => ApiTypes\Base\RepostsInfo::class,
		];


		protected $post_id;
		protected $post_type;
		protected $text;
		protected $copy_history;
		protected $attachments;
		protected $geo;
		protected $post_source;
		protected $comments;
		protected $likes;
		protected $reposts;


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


		public function setCopyHistory($copy_history) {
			$this->copy_history = (array) $copy_history;
		}

		public function getCopyHistory() {
			return (array) $this->copy_history;
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




	}
?>