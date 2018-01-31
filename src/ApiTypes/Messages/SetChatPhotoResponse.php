<?php

	namespace VkApiSDK\ApiTypes\Messages;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class SetChatPhotoResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'message_id' 	 => true,
			'chat' 	 => ApiTypes\Messages\Chat::class,
		];


		protected $message_id;
		protected $chat;


		public function setMessageId($message_id) {
			$this->message_id = (int) $message_id;
		}

		public function getMessageId() {
			return (int) $this->message_id;
		}


		public function setChat($chat) {
			$this->chat = $chat;
		}

		public function getChat() {
			return $this->chat;
		}




	}
?>