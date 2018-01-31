<?php

	namespace VkApiSDK\ApiTypes\Wall;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Wallpost extends BaseType {

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




	}
?>