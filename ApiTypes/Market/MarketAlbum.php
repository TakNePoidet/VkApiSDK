<?php

	namespace VkApiSDK\ApiTypes\Market;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class MarketAlbum extends BaseType {

		protected static $requiredParams = ['id','owner_id','title','count','updated_time'];


		protected static $map = [
			'id' 	 => true,
			'owner_id' 	 => true,
			'title' 	 => true,
			'count' 	 => true,
			'updated_time' 	 => true,
			'photo' 	 => ApiTypes\Photos\Photo::class,
		];


		protected $id;
		protected $owner_id;
		protected $title;
		protected $count;
		protected $updated_time;
		protected $photo;


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


		public function setUpdatedTime($updated_time) {
			$this->updated_time = (int) $updated_time;
		}

		public function getUpdatedTime() {
			return (int) $this->updated_time;
		}


		public function setPhoto($photo) {
			$this->photo = $photo;
		}

		public function getPhoto() {
			return $this->photo;
		}




	}
?>