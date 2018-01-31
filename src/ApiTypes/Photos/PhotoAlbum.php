<?php

	namespace VkApiSDK\ApiTypes\Photos;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class PhotoAlbum extends BaseType {

		protected static $requiredParams = ['id','owner_id','title','created','updated','size'];


		protected static $map = [
			'id' 	 => true,
			'thumb' 	 => ApiTypes\Photos\Photo::class,
			'owner_id' 	 => true,
			'title' 	 => true,
			'description' 	 => true,
			'created' 	 => true,
			'updated' 	 => true,
			'size' 	 => true,
		];


		protected $id;
		protected $thumb;
		protected $owner_id;
		protected $title;
		protected $description;
		protected $created;
		protected $updated;
		protected $size;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setThumb($thumb) {
			$this->thumb = $thumb;
		}

		public function getThumb() {
			return $this->thumb;
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




	}
?>