<?php

	namespace VkApiSDK\ApiTypes\Messages;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Dialog extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'unread' 	 => true,
			'message' 	 => ApiTypes\Messages\Message::class,
			'in_read' 	 => true,
			'out_read' 	 => true,
			'important' 	 => ApiTypes\Base\BoolInt::class,
			'unanswered' 	 => ApiTypes\Base\BoolInt::class,
		];


		protected $unread;
		protected $message;
		protected $in_read;
		protected $out_read;
		protected $important;
		protected $unanswered;


		public function setUnread($unread) {
			$this->unread = (int) $unread;
		}

		public function getUnread() {
			return (int) $this->unread;
		}


		public function setMessage($message) {
			$this->message = $message;
		}

		public function getMessage() {
			return $this->message;
		}


		public function setInRead($in_read) {
			$this->in_read = (int) $in_read;
		}

		public function getInRead() {
			return (int) $this->in_read;
		}


		public function setOutRead($out_read) {
			$this->out_read = (int) $out_read;
		}

		public function getOutRead() {
			return (int) $this->out_read;
		}


		public function setImportant($important) {
			$this->important = $important;
		}

		public function getImportant() {
			return $this->important;
		}


		public function setUnanswered($unanswered) {
			$this->unanswered = $unanswered;
		}

		public function getUnanswered() {
			return $this->unanswered;
		}




	}
?>