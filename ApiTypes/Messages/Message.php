<?php

	namespace VkApiSDK\ApiTypes\Messages;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Message extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'date' 	 => true,
			'out' 	 => ApiTypes\Base\BoolInt::class,
			'user_id' 	 => true,
			'from_id' 	 => true,
			'random_id' 	 => true,
			'important' 	 => ApiTypes\Base\BoolInt::class,
			'deleted' 	 => ApiTypes\Base\BoolInt::class,
			'emoji' 	 => ApiTypes\Base\BoolInt::class,
			'fwd_messages' 	 => array(ApiTypes\Messages\Message::class),
			'read_state' 	 => ApiTypes\Base\BoolInt::class,
			'title' 	 => true,
			'body' 	 => true,
			'attachments' 	 => array(ApiTypes\Messages\MessageAttachment::class),
			'chat_id' 	 => true,
			'geo' 	 => ApiTypes\Base\Geo::class,
			'chat_active' 	 => true,
			'push_settings' 	 => ApiTypes\Messages\ChatPushSettings::class,
			'action' 	 => true,
			'action_mid' 	 => true,
			'action_email' 	 => true,
			'action_text' 	 => true,
			'users_count' 	 => true,
			'admin_id' 	 => true,
			'photo_50' 	 => true,
			'photo_100' 	 => true,
			'photo_200' 	 => true,
		];


		protected $id;
		protected $date;
		protected $out;
		protected $user_id;
		protected $from_id;
		protected $random_id;
		protected $important;
		protected $deleted;
		protected $emoji;
		protected $fwd_messages;
		protected $read_state;
		protected $title;
		protected $body;
		protected $attachments;
		protected $chat_id;
		protected $geo;
		protected $chat_active;
		protected $push_settings;
		protected $action;
		protected $action_mid;
		protected $action_email;
		protected $action_text;
		protected $users_count;
		protected $admin_id;
		protected $photo_50;
		protected $photo_100;
		protected $photo_200;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setDate($date) {
			$this->date = (int) $date;
		}

		public function getDate() {
			return (int) $this->date;
		}


		public function setOut($out) {
			$this->out = $out;
		}

		public function getOut() {
			return $this->out;
		}


		public function setUserId($user_id) {
			$this->user_id = (int) $user_id;
		}

		public function getUserId() {
			return (int) $this->user_id;
		}


		public function setFromId($from_id) {
			$this->from_id = (int) $from_id;
		}

		public function getFromId() {
			return (int) $this->from_id;
		}


		public function setRandomId($random_id) {
			$this->random_id = (int) $random_id;
		}

		public function getRandomId() {
			return (int) $this->random_id;
		}


		public function setImportant($important) {
			$this->important = $important;
		}

		public function getImportant() {
			return $this->important;
		}


		public function setDeleted($deleted) {
			$this->deleted = $deleted;
		}

		public function getDeleted() {
			return $this->deleted;
		}


		public function setEmoji($emoji) {
			$this->emoji = $emoji;
		}

		public function getEmoji() {
			return $this->emoji;
		}


		public function setFwdMessages($fwd_messages) {
			$this->fwd_messages = (array) $fwd_messages;
		}

		public function getFwdMessages() {
			return (array) $this->fwd_messages;
		}


		public function setReadState($read_state) {
			$this->read_state = $read_state;
		}

		public function getReadState() {
			return $this->read_state;
		}


		public function setTitle($title) {
			$this->title = $title;
		}

		public function getTitle() {
			return $this->title;
		}


		public function setBody($body) {
			$this->body = $body;
		}

		public function getBody() {
			return $this->body;
		}


		public function setAttachments($attachments) {
			$this->attachments = (array) $attachments;
		}

		public function getAttachments() {
			return (array) $this->attachments;
		}


		public function setChatId($chat_id) {
			$this->chat_id = (int) $chat_id;
		}

		public function getChatId() {
			return (int) $this->chat_id;
		}


		public function setGeo($geo) {
			$this->geo = $geo;
		}

		public function getGeo() {
			return $this->geo;
		}


		public function setChatActive($chat_active) {
			$this->chat_active = (array) $chat_active;
		}

		public function getChatActive() {
			return (array) $this->chat_active;
		}


		public function setPushSettings($push_settings) {
			$this->push_settings = $push_settings;
		}

		public function getPushSettings() {
			return $this->push_settings;
		}


		public function setAction($action) {
			$this->action = $action;
		}

		public function getAction() {
			return $this->action;
		}


		public function setActionMid($action_mid) {
			$this->action_mid = (int) $action_mid;
		}

		public function getActionMid() {
			return (int) $this->action_mid;
		}


		public function setActionEmail($action_email) {
			$this->action_email = $action_email;
		}

		public function getActionEmail() {
			return $this->action_email;
		}


		public function setActionText($action_text) {
			$this->action_text = $action_text;
		}

		public function getActionText() {
			return $this->action_text;
		}


		public function setUsersCount($users_count) {
			$this->users_count = (int) $users_count;
		}

		public function getUsersCount() {
			return (int) $this->users_count;
		}


		public function setAdminId($admin_id) {
			$this->admin_id = (int) $admin_id;
		}

		public function getAdminId() {
			return (int) $this->admin_id;
		}


		public function setPhoto50($photo_50) {
			$this->photo_50 = $photo_50;
		}

		public function getPhoto50() {
			return $this->photo_50;
		}


		public function setPhoto100($photo_100) {
			$this->photo_100 = $photo_100;
		}

		public function getPhoto100() {
			return $this->photo_100;
		}


		public function setPhoto200($photo_200) {
			$this->photo_200 = $photo_200;
		}

		public function getPhoto200() {
			return $this->photo_200;
		}




	}
?>