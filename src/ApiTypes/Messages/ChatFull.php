<?php

	namespace VkApiSDK\ApiTypes\Messages;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class ChatFull extends BaseType {

		protected static $requiredParams = ['id','type','admin_id','users'];


		protected static $map = [
			'id' 	 => true,
			'type' 	 => true,
			'title' 	 => true,
			'admin_id' 	 => true,
			'users' 	 => array(ApiTypes\Messages\UserXtrInvitedBy::class),
			'push_settings' 	 => ApiTypes\Messages\ChatPushSettings::class,
			'photo_50' 	 => true,
			'photo_100' 	 => true,
			'photo_200' 	 => true,
			'left' 	 => ApiTypes\Base\BoolInt::class,
			'kicked' 	 => ApiTypes\Base\BoolInt::class,
		];


		protected $id;
		protected $type;
		protected $title;
		protected $admin_id;
		protected $users;
		protected $push_settings;
		protected $photo_50;
		protected $photo_100;
		protected $photo_200;
		protected $left;
		protected $kicked;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setType($type) {
			$this->type = $type;
		}

		public function getType() {
			return $this->type;
		}


		public function setTitle($title) {
			$this->title = $title;
		}

		public function getTitle() {
			return $this->title;
		}


		public function setAdminId($admin_id) {
			$this->admin_id = (int) $admin_id;
		}

		public function getAdminId() {
			return (int) $this->admin_id;
		}


		public function setUsers($users) {
			$this->users = (array) $users;
		}

		public function getUsers() {
			return (array) $this->users;
		}


		public function setPushSettings($push_settings) {
			$this->push_settings = $push_settings;
		}

		public function getPushSettings() {
			return $this->push_settings;
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


		public function setLeft($left) {
			$this->left = $left;
		}

		public function getLeft() {
			return $this->left;
		}


		public function setKicked($kicked) {
			$this->kicked = $kicked;
		}

		public function getKicked() {
			return $this->kicked;
		}




	}
?>