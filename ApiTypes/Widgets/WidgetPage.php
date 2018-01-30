<?php

	namespace VkApiSDK\ApiTypes\Widgets;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class WidgetPage extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'title' 	 => true,
			'description' 	 => true,
			'photo' 	 => true,
			'url' 	 => true,
			'likes' 	 => ApiTypes\Base\ObjectCount::class,
			'comments' 	 => ApiTypes\Base\ObjectCount::class,
			'date' 	 => true,
			'page_id' 	 => true,
		];


		protected $id;
		protected $title;
		protected $description;
		protected $photo;
		protected $url;
		protected $likes;
		protected $comments;
		protected $date;
		protected $page_id;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
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


		public function setPhoto($photo) {
			$this->photo = $photo;
		}

		public function getPhoto() {
			return $this->photo;
		}


		public function setUrl($url) {
			$this->url = $url;
		}

		public function getUrl() {
			return $this->url;
		}


		public function setLikes($likes) {
			$this->likes = $likes;
		}

		public function getLikes() {
			return $this->likes;
		}


		public function setComments($comments) {
			$this->comments = $comments;
		}

		public function getComments() {
			return $this->comments;
		}


		public function setDate($date) {
			$this->date = (int) $date;
		}

		public function getDate() {
			return (int) $this->date;
		}


		public function setPageId($page_id) {
			$this->page_id = $page_id;
		}

		public function getPageId() {
			return $this->page_id;
		}




	}
?>