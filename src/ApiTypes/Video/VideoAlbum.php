<?php

	namespace VkApiSDK\ApiTypes\Video;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class VideoAlbum extends BaseType {

		protected static $requiredParams = ['id','owner_id','title'];


		protected static $map = [
			'id' 	 => true,
			'owner_id' 	 => true,
			'title' 	 => true,
		];


		protected $id;
		protected $owner_id;
		protected $title;


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




	}
?>