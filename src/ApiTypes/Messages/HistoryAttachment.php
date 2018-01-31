<?php

	namespace VkApiSDK\ApiTypes\Messages;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class HistoryAttachment extends BaseType {

		protected static $requiredParams = ['attachment'];


		protected static $map = [
			'message_id' 	 => true,
			'attachment' 	 => ApiTypes\Messages\HistoryMessageAttachment::class,
		];


		protected $message_id;
		protected $attachment;


		public function setMessageId($message_id) {
			$this->message_id = (int) $message_id;
		}

		public function getMessageId() {
			return (int) $this->message_id;
		}


		public function setAttachment($attachment) {
			$this->attachment = $attachment;
		}

		public function getAttachment() {
			return $this->attachment;
		}




	}
?>