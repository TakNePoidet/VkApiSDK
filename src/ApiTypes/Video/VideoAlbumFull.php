<?php

	namespace VkApiSDK\ApiTypes\Video;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class VideoAlbumFull extends BaseType {

		protected static $requiredParams = ['id','owner_id','title','updated_time','count'];


		protected static $map = [
			'id' 	 => true,
			'owner_id' 	 => true,
			'title' 	 => true,
			'count' 	 => true,
			'photo_160' 	 => true,
			'photo_320' 	 => true,
			'updated_time' 	 => true,
			'is_system' 	 => true,
		];


		protected $id;
		protected $owner_id;
		protected $title;
		protected $count;
		protected $photo_160;
		protected $photo_320;
		protected $updated_time;
		protected $is_system;


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


		public function setTitle($title) {
			$this->title = $title;
		}

		public function getTitle() {
			return $this->title;
		}


		public function setCount($count) {
			$this->count = (int) $count;
		}

		public function getCount() {
			return (int) $this->count;
		}


		public function setPhoto160($photo_160) {
			$this->photo_160 = $photo_160;
		}

		public function getPhoto160() {
			return $this->photo_160;
		}


		public function setPhoto320($photo_320) {
			$this->photo_320 = $photo_320;
		}

		public function getPhoto320() {
			return $this->photo_320;
		}


		public function setUpdatedTime($updated_time) {
			$this->updated_time = (int) $updated_time;
		}

		public function getUpdatedTime() {
			return (int) $this->updated_time;
		}


		public function setIsSystem($is_system) {
			$this->is_system = (int) $is_system;
		}

		public function getIsSystem() {
			return (int) $this->is_system;
		}




	}
?>