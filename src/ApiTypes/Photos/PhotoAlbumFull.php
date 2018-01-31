<?php

	namespace VkApiSDK\ApiTypes\Photos;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class PhotoAlbumFull extends BaseType {

		protected static $requiredParams = ['id','owner_id','title','created','updated','size'];


		protected static $map = [
			'id' 	 => true,
			'thumb_id' 	 => true,
			'thumb_src' 	 => true,
			'owner_id' 	 => true,
			'title' 	 => true,
			'description' 	 => true,
			'created' 	 => true,
			'updated' 	 => true,
			'size' 	 => true,
			'privacy_view' 	 => true,
			'privacy_comment' 	 => true,
			'upload_by_admins_only' 	 => ApiTypes\Base\BoolInt::class,
			'comments_disabled' 	 => ApiTypes\Base\BoolInt::class,
			'can_upload' 	 => ApiTypes\Base\BoolInt::class,
			'thumb_is_last' 	 => ApiTypes\Base\BoolInt::class,
			'sizes' 	 => array(ApiTypes\Photos\PhotoSizes::class),
		];


		protected $id;
		protected $thumb_id;
		protected $thumb_src;
		protected $owner_id;
		protected $title;
		protected $description;
		protected $created;
		protected $updated;
		protected $size;
		protected $privacy_view;
		protected $privacy_comment;
		protected $upload_by_admins_only;
		protected $comments_disabled;
		protected $can_upload;
		protected $thumb_is_last;
		protected $sizes;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setThumbId($thumb_id) {
			$this->thumb_id = (int) $thumb_id;
		}

		public function getThumbId() {
			return (int) $this->thumb_id;
		}


		public function setThumbSrc($thumb_src) {
			$this->thumb_src = $thumb_src;
		}

		public function getThumbSrc() {
			return $this->thumb_src;
		}


		public function setOwnerId($owner_id) {
			$this->owner_id = (int) $owner_id;
		}

		public function getOwnerId() {
			return (int) $this->owner_id;
		}


		public function setTitle($title) {
			$this->title = $title;
		}

		public function getTitle() {
			return $this->title;
		}


		public function setDescription($description) {
			$this->description = $description;
		}

		public function getDescription() {
			return $this->description;
		}


		public function setCreated($created) {
			$this->created = (int) $created;
		}

		public function getCreated() {
			return (int) $this->created;
		}


		public function setUpdated($updated) {
			$this->updated = (int) $updated;
		}

		public function getUpdated() {
			return (int) $this->updated;
		}


		public function setSize($size) {
			$this->size = (int) $size;
		}

		public function getSize() {
			return (int) $this->size;
		}


		public function setPrivacyView($privacy_view) {
			$this->privacy_view = (array) $privacy_view;
		}

		public function getPrivacyView() {
			return (array) $this->privacy_view;
		}


		public function setPrivacyComment($privacy_comment) {
			$this->privacy_comment = (array) $privacy_comment;
		}

		public function getPrivacyComment() {
			return (array) $this->privacy_comment;
		}


		public function setUploadByAdminsOnly($upload_by_admins_only) {
			$this->upload_by_admins_only = $upload_by_admins_only;
		}

		public function getUploadByAdminsOnly() {
			return $this->upload_by_admins_only;
		}


		public function setCommentsDisabled($comments_disabled) {
			$this->comments_disabled = $comments_disabled;
		}

		public function getCommentsDisabled() {
			return $this->comments_disabled;
		}


		public function setCanUpload($can_upload) {
			$this->can_upload = $can_upload;
		}

		public function getCanUpload() {
			return $this->can_upload;
		}


		public function setThumbIsLast($thumb_is_last) {
			$this->thumb_is_last = $thumb_is_last;
		}

		public function getThumbIsLast() {
			return $this->thumb_is_last;
		}


		public function setSizes($sizes) {
			$this->sizes = (array) $sizes;
		}

		public function getSizes() {
			return (array) $this->sizes;
		}




	}
?>