<?php

	namespace VkApiSDK\ApiTypes\Account;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class PushParams extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'msg' 	 => true,
			'chat' 	 => true,
			'friend' 	 => array(ApiTypes\Account\OnoffOptions::class),
			'friend_found' 	 => array(ApiTypes\Account\OnoffOptions::class),
			'friend_accepted' 	 => array(ApiTypes\Account\OnoffOptions::class),
			'reply' 	 => array(ApiTypes\Account\OnoffOptions::class),
			'comment' 	 => true,
			'mention' 	 => true,
			'like' 	 => true,
			'repost' 	 => true,
			'wall_post' 	 => array(ApiTypes\Account\OnoffOptions::class),
			'wall_publish' 	 => array(ApiTypes\Account\OnoffOptions::class),
			'group_invite' 	 => array(ApiTypes\Account\OnoffOptions::class),
			'group_accepted' 	 => array(ApiTypes\Account\OnoffOptions::class),
			'event_soon' 	 => array(ApiTypes\Account\OnoffOptions::class),
			'photos_tag' 	 => true,
			'app_request' 	 => array(ApiTypes\Account\OnoffOptions::class),
			'sdk_open' 	 => array(ApiTypes\Account\OnoffOptions::class),
			'new_post' 	 => array(ApiTypes\Account\OnoffOptions::class),
			'birthday' 	 => array(ApiTypes\Account\OnoffOptions::class),
		];


		protected $msg;
		protected $chat;
		protected $friend;
		protected $friend_found;
		protected $friend_accepted;
		protected $reply;
		protected $comment;
		protected $mention;
		protected $like;
		protected $repost;
		protected $wall_post;
		protected $wall_publish;
		protected $group_invite;
		protected $group_accepted;
		protected $event_soon;
		protected $photos_tag;
		protected $app_request;
		protected $sdk_open;
		protected $new_post;
		protected $birthday;


		public function setMsg($msg) {
			$this->msg = (array) $msg;
		}

		public function getMsg() {
			return (array) $this->msg;
		}


		public function setChat($chat) {
			$this->chat = (array) $chat;
		}

		public function getChat() {
			return (array) $this->chat;
		}


		public function setFriend($friend) {
			$this->friend = (array) $friend;
		}

		public function getFriend() {
			return (array) $this->friend;
		}


		public function setFriendFound($friend_found) {
			$this->friend_found = (array) $friend_found;
		}

		public function getFriendFound() {
			return (array) $this->friend_found;
		}


		public function setFriendAccepted($friend_accepted) {
			$this->friend_accepted = (array) $friend_accepted;
		}

		public function getFriendAccepted() {
			return (array) $this->friend_accepted;
		}


		public function setReply($reply) {
			$this->reply = (array) $reply;
		}

		public function getReply() {
			return (array) $this->reply;
		}


		public function setComment($comment) {
			$this->comment = (array) $comment;
		}

		public function getComment() {
			return (array) $this->comment;
		}


		public function setMention($mention) {
			$this->mention = (array) $mention;
		}

		public function getMention() {
			return (array) $this->mention;
		}


		public function setLike($like) {
			$this->like = (array) $like;
		}

		public function getLike() {
			return (array) $this->like;
		}


		public function setRepost($repost) {
			$this->repost = (array) $repost;
		}

		public function getRepost() {
			return (array) $this->repost;
		}


		public function setWallPost($wall_post) {
			$this->wall_post = (array) $wall_post;
		}

		public function getWallPost() {
			return (array) $this->wall_post;
		}


		public function setWallPublish($wall_publish) {
			$this->wall_publish = (array) $wall_publish;
		}

		public function getWallPublish() {
			return (array) $this->wall_publish;
		}


		public function setGroupInvite($group_invite) {
			$this->group_invite = (array) $group_invite;
		}

		public function getGroupInvite() {
			return (array) $this->group_invite;
		}


		public function setGroupAccepted($group_accepted) {
			$this->group_accepted = (array) $group_accepted;
		}

		public function getGroupAccepted() {
			return (array) $this->group_accepted;
		}


		public function setEventSoon($event_soon) {
			$this->event_soon = (array) $event_soon;
		}

		public function getEventSoon() {
			return (array) $this->event_soon;
		}


		public function setPhotosTag($photos_tag) {
			$this->photos_tag = (array) $photos_tag;
		}

		public function getPhotosTag() {
			return (array) $this->photos_tag;
		}


		public function setAppRequest($app_request) {
			$this->app_request = (array) $app_request;
		}

		public function getAppRequest() {
			return (array) $this->app_request;
		}


		public function setSdkOpen($sdk_open) {
			$this->sdk_open = (array) $sdk_open;
		}

		public function getSdkOpen() {
			return (array) $this->sdk_open;
		}


		public function setNewPost($new_post) {
			$this->new_post = (array) $new_post;
		}

		public function getNewPost() {
			return (array) $this->new_post;
		}


		public function setBirthday($birthday) {
			$this->birthday = (array) $birthday;
		}

		public function getBirthday() {
			return (array) $this->birthday;
		}




	}
?>