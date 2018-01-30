<?php

	namespace VkApiSDK\ApiTypes\Notifications;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Notification extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'type' 	 => true,
			'date' 	 => true,
			'parent' 	 => ApiTypes\Notifications\NotificationParent::class,
			'feedback' 	 => ApiTypes\Notifications\Feedback::class,
			'reply' 	 => ApiTypes\Notifications\Reply::class,
		];


		protected $type;
		protected $date;
		protected $parent;
		protected $feedback;
		protected $reply;


		public function setType($type) {
			$this->type = $type;
		}

		public function getType() {
			return $this->type;
		}


		public function setDate($date) {
			$this->date = (int) $date;
		}

		public function getDate() {
			return (int) $this->date;
		}


		public function setParent($parent) {
			$this->parent = $parent;
		}

		public function getParent() {
			return $this->parent;
		}


		public function setFeedback($feedback) {
			$this->feedback = $feedback;
		}

		public function getFeedback() {
			return $this->feedback;
		}


		public function setReply($reply) {
			$this->reply = $reply;
		}

		public function getReply() {
			return $this->reply;
		}




	}
?>