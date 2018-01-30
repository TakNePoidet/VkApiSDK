<?php

	namespace VkApiSDK\ApiTypes\Wall;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class WallpostFull extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'from_id' 	 => true,
			'owner_id' 	 => true,
			'date' 	 => true,
			'views' 	 => ApiTypes\Wall\Views::class,
			'post_type' 	 => ApiTypes\Wall\PostType::class,
			'text' 	 => true,
			'signer_id' 	 => true,
			'attachments' 	 => array(ApiTypes\Wall\WallpostAttachment::class),
			'geo' 	 => ApiTypes\Base\Geo::class,
			'post_source' 	 => ApiTypes\Wall\PostSource::class,
			'copy_history' 	 => array(ApiTypes\Wall\Wallpost::class),
			'can_edit' 	 => ApiTypes\Base\BoolInt::class,
			'created_by' 	 => true,
			'can_delete' 	 => ApiTypes\Base\BoolInt::class,
			'can_pin' 	 => ApiTypes\Base\BoolInt::class,
			'is_pinned' 	 => true,
			'comments' 	 => ApiTypes\Base\CommentsInfo::class,
			'likes' 	 => ApiTypes\Base\LikesInfo::class,
			'reposts' 	 => ApiTypes\Base\RepostsInfo::class,
			'marked_as_ads' 	 => ApiTypes\Base\BoolInt::class,
		];


		protected $id;
		protected $from_id;
		protected $owner_id;
		protected $date;
		protected $views;
		protected $post_type;
		protected $text;
		protected $signer_id;
		protected $attachments;
		protected $geo;
		protected $post_source;
		protected $copy_history;
		protected $can_edit;
		protected $created_by;
		protected $can_delete;
		protected $can_pin;
		protected $is_pinned;
		protected $comments;
		protected $likes;
		protected $reposts;
		protected $marked_as_ads;


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


		public function setViews($views) {
			$this->views = $views;
		}

		public function getViews() {
			return $this->views;
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


		public function setCopyHistory($copy_history) {
			$this->copy_history = (array) $copy_history;
		}

		public function getCopyHistory() {
			return (array) $this->copy_history;
		}


		public function setCanEdit($can_edit) {
			$this->can_edit = $can_edit;
		}

		public function getCanEdit() {
			return $this->can_edit;
		}


		public function setCreatedBy($created_by) {
			$this->created_by = (int) $created_by;
		}

		public function getCreatedBy() {
			return (int) $this->created_by;
		}


		public function setCanDelete($can_delete) {
			$this->can_delete = $can_delete;
		}

		public function getCanDelete() {
			return $this->can_delete;
		}


		public function setCanPin($can_pin) {
			$this->can_pin = $can_pin;
		}

		public function getCanPin() {
			return $this->can_pin;
		}


		public function setIsPinned($is_pinned) {
			$this->is_pinned = (int) $is_pinned;
		}

		public function getIsPinned() {
			return (int) $this->is_pinned;
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


		public function setMarkedAsAds($marked_as_ads) {
			$this->marked_as_ads = $marked_as_ads;
		}

		public function getMarkedAsAds() {
			return $this->marked_as_ads;
		}




	}
?>