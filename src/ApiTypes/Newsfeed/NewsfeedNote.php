<?php

	namespace VkApiSDK\ApiTypes\Newsfeed;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class NewsfeedNote extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'owner_id' 	 => true,
			'title' 	 => true,
			'comments' 	 => true,
		];


		protected $id;
		protected $owner_id;
		protected $title;
		protected $comments;


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


		public function setComments($comments) {
			$this->comments = (int) $comments;
		}

		public function getComments() {
			return (int) $this->comments;
		}




	}
?>