<?php

	namespace VkApiSDK\ApiTypes\Messages;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetLongPollHistoryResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'history' 	 => true,
			'groups' 	 => array(ApiTypes\Groups\Group::class),
			'messages' 	 => ApiTypes\Messages\LongpollMessages::class,
			'profiles' 	 => array(ApiTypes\Users\UserFull::class),
			'chats' 	 => array(ApiTypes\Messages\Chat::class),
			'new_pts' 	 => true,
			'more' 	 => ApiTypes\Base\BoolInt::class,
		];


		protected $history;
		protected $groups;
		protected $messages;
		protected $profiles;
		protected $chats;
		protected $new_pts;
		protected $more;


		public function setHistory($history) {
			$this->history = (array) $history;
		}

		public function getHistory() {
			return (array) $this->history;
		}


		public function setGroups($groups) {
			$this->groups = (array) $groups;
		}

		public function getGroups() {
			return (array) $this->groups;
		}


		public function setMessages($messages) {
			$this->messages = $messages;
		}

		public function getMessages() {
			return $this->messages;
		}


		public function setProfiles($profiles) {
			$this->profiles = (array) $profiles;
		}

		public function getProfiles() {
			return (array) $this->profiles;
		}


		public function setChats($chats) {
			$this->chats = (array) $chats;
		}

		public function getChats() {
			return (array) $this->chats;
		}


		public function setNewPts($new_pts) {
			$this->new_pts = (int) $new_pts;
		}

		public function getNewPts() {
			return (int) $this->new_pts;
		}


		public function setMore($more) {
			$this->more = $more;
		}

		public function getMore() {
			return $this->more;
		}




	}
?>