<?php

	namespace VkApiSDK\ApiTypes\Widgets;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class WidgetComment extends BaseType {

		protected static $requiredParams = ['id','from_id','to_id','date','post_type','text'];


		protected static $map = [
			'id' 	 => true,
			'from_id' 	 => true,
			'to_id' 	 => true,
			'date' 	 => true,
			'user' 	 => ApiTypes\Users\UserFull::class,
			'post_type' 	 => true,
			'text' 	 => true,
			'can_delete' 	 => ApiTypes\Base\BoolInt::class,
			'media' 	 => ApiTypes\Widgets\CommentMedia::class,
			'attachments' 	 => array(ApiTypes\Wall\CommentAttachment::class),
			'post_source' 	 => ApiTypes\Wall\PostSource::class,
			'comments' 	 => ApiTypes\Widgets\CommentReplies::class,
			'likes' 	 => ApiTypes\Base\LikesInfo::class,
			'reposts' 	 => ApiTypes\Base\RepostsInfo::class,
		];


		protected $id;
		protected $from_id;
		protected $to_id;
		protected $date;
		protected $user;
		protected $post_type;
		protected $text;
		protected $can_delete;
		protected $media;
		protected $attachments;
		protected $post_source;
		protected $comments;
		protected $likes;
		protected $reposts;


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


		public function setUser($user) {
			$this->user = $user;
		}

		public function getUser() {
			return $this->user;
		}


		public function setPostType($post_type) {
			$this->post_type = (int) $post_type;
		}

		public function getPostType() {
			return (int) $this->post_type;
		}


		public function setText($text) {
			$this->text = $text;
		}

		public function getText() {
			return $this->text;
		}


		public function setCanDelete($can_delete) {
			$this->can_delete = $can_delete;
		}

		public function getCanDelete() {
			return $this->can_delete;
		}


		public function setMedia($media) {
			$this->media = $media;
		}

		public function getMedia() {
			return $this->media;
		}


		public function setAttachments($attachments) {
			$this->attachments = (array) $attachments;
		}

		public function getAttachments() {
			return (array) $this->attachments;
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