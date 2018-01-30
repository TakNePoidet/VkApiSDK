<?php

	namespace VkApiSDK\ApiTypes\Newsfeed;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class NewsfeedItem extends BaseType {

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
			'photos' 	 => ApiTypes\Newsfeed\ItemPhotoPhotos::class,
			'photo_tags' 	 => ApiTypes\Newsfeed\ItemPhotoTagPhotoTags::class,
			'friends' 	 => ApiTypes\Newsfeed\ItemFriendFriends::class,
			'notes' 	 => ApiTypes\Newsfeed\ItemNoteNotes::class,
			'audio' 	 => ApiTypes\Newsfeed\ItemAudioAudio::class,
			'video' 	 => ApiTypes\Newsfeed\ItemVideoVideo::class,
			'type' 	 => true,
			'source_id' 	 => true,
			'date' 	 => true,
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
		protected $photos;
		protected $photo_tags;
		protected $friends;
		protected $notes;
		protected $audio;
		protected $video;
		protected $type;
		protected $source_id;
		protected $date;


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


		public function setPhotos($photos) {
			$this->photos = $photos;
		}

		public function getPhotos() {
			return $this->photos;
		}


		public function setPhotoTags($photo_tags) {
			$this->photo_tags = $photo_tags;
		}

		public function getPhotoTags() {
			return $this->photo_tags;
		}


		public function setFriends($friends) {
			$this->friends = $friends;
		}

		public function getFriends() {
			return $this->friends;
		}


		public function setNotes($notes) {
			$this->notes = $notes;
		}

		public function getNotes() {
			return $this->notes;
		}


		public function setAudio($audio) {
			$this->audio = $audio;
		}

		public function getAudio() {
			return $this->audio;
		}


		public function setVideo($video) {
			$this->video = $video;
		}

		public function getVideo() {
			return $this->video;
		}


		public function setType($type) {
			$this->type = $type;
		}

		public function getType() {
			return $this->type;
		}


		public function setSourceId($source_id) {
			$this->source_id = (int) $source_id;
		}

		public function getSourceId() {
			return (int) $this->source_id;
		}


		public function setDate($date) {
			$this->date = (int) $date;
		}

		public function getDate() {
			return (int) $this->date;
		}




	}
?>