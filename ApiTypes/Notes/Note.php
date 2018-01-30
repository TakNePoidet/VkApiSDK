<?php

	namespace VkApiSDK\ApiTypes\Notes;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Note extends BaseType {

		protected static $requiredParams = ['id','owner_id','comments','date','title','view_url'];


		protected static $map = [
			'id' 	 => true,
			'owner_id' 	 => true,
			'comments' 	 => true,
			'can_comment' 	 => ApiTypes\Base\BoolInt::class,
			'date' 	 => true,
			'title' 	 => true,
			'text' 	 => true,
			'text_wiki' 	 => true,
			'view_url' 	 => true,
		];


		protected $id;
		protected $owner_id;
		protected $comments;
		protected $can_comment;
		protected $date;
		protected $title;
		protected $text;
		protected $text_wiki;
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


		public function setCanComment($can_comment) {
			$this->can_comment = $can_comment;
		}

		public function getCanComment() {
			return $this->can_comment;
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


		public function setText($text) {
			$this->text = $text;
		}

		public function getText() {
			return $this->text;
		}


		public function setTextWiki($text_wiki) {
			$this->text_wiki = $text_wiki;
		}

		public function getTextWiki() {
			return $this->text_wiki;
		}


		public function setViewUrl($view_url) {
			$this->view_url = $view_url;
		}

		public function getViewUrl() {
			return $this->view_url;
		}




	}
?>