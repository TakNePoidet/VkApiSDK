<?php

	namespace VkApiSDK\ApiTypes\Widgets;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class CommentRepliesItem extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'cid' 	 => true,
			'uid' 	 => true,
			'date' 	 => true,
			'text' 	 => true,
			'likes' 	 => ApiTypes\Widgets\WidgetLikes::class,
			'user' 	 => ApiTypes\Users\UserFull::class,
		];


		protected $cid;
		protected $uid;
		protected $date;
		protected $text;
		protected $likes;
		protected $user;


		public function setCid($cid) {
			$this->cid = (int) $cid;
		}

		public function getCid() {
			return (int) $this->cid;
		}


		public function setUid($uid) {
			$this->uid = (int) $uid;
		}

		public function getUid() {
			return (int) $this->uid;
		}


		public function setDate($date) {
			$this->date = (int) $date;
		}

		public function getDate() {
			return (int) $this->date;
		}


		public function setText($text) {
			$this->text = $text;
		}

		public function getText() {
			return $this->text;
		}


		public function setLikes($likes) {
			$this->likes = $likes;
		}

		public function getLikes() {
			return $this->likes;
		}


		public function setUser($user) {
			$this->user = $user;
		}

		public function getUser() {
			return $this->user;
		}




	}
?>