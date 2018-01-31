<?php

	namespace VkApiSDK\ApiTypes\Wall;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class AttachedNote extends BaseType {

		protected static $requiredParams = ['id','owner_id','comments','read_comments','date','title','view_url'];


		protected static $map = [
			'id' 	 => true,
			'owner_id' 	 => true,
			'comments' 	 => true,
			'read_comments' 	 => true,
			'date' 	 => true,
			'title' 	 => true,
			'view_url' 	 => true,
		];


		protected $id;
		protected $owner_id;
		protected $comments;
		protected $read_comments;
		protected $date;
		protected $title;
		protected $view_url;


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


		public function setComments($comments) {
			$this->comments = (int) $comments;
		}

		public function getComments() {
			return (int) $this->comments;
		}


		public function setReadComments($read_comments) {
			$this->read_comments = (int) $read_comments;
		}

		public function getReadComments() {
			return (int) $this->read_comments;
		}


		public function setDate($date) {
			$this->date = (int) $date;
		}

		public function getDate() {
			return (int) $this->date;
		}


		public function setTitle($title) {
			$this->title = $title;
		}

		public function getTitle() {
			return $this->title;
		}


		public function setViewUrl($view_url) {
			$this->view_url = $view_url;
		}

		public function getViewUrl() {
			return $this->view_url;
		}




	}
?>