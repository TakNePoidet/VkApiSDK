<?php

	namespace VkApiSDK\ApiTypes\Messages;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class UserXtrInvitedBy extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'first_name' 	 => true,
			'last_name' 	 => true,
			'deactivated' 	 => true,
			'hidden' 	 => true,
			'sex' 	 => ApiTypes\Base\Sex::class,
			'screen_name' 	 => true,
			'photo_50' 	 => true,
			'photo_100' 	 => true,
			'online' 	 => ApiTypes\Base\BoolInt::class,
			'online_mobile' 	 => ApiTypes\Base\BoolInt::class,
			'online_app' 	 => true,
			'type' 	 => true,
			'invited_by' 	 => true,
		];


		protected $id;
		protected $first_name;
		protected $last_name;
		protected $deactivated;
		protected $hidden;
		protected $sex;
		protected $screen_name;
		protected $photo_50;
		protected $photo_100;
		protected $online;
		protected $online_mobile;
		protected $online_app;
		protected $type;
		protected $invited_by;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setFirstName($first_name) {
			$this->first_name = $first_name;
		}

		public function getFirstName() {
			return $this->first_name;
		}


		public function setLastName($last_name) {
			$this->last_name = $last_name;
		}

		public function getLastName() {
			return $this->last_name;
		}


		public function setDeactivated($deactivated) {
			$this->deactivated = $deactivated;
		}

		public function getDeactivated() {
			return $this->deactivated;
		}


		public function setHidden($hidden) {
			$this->hidden = (int) $hidden;
		}

		public function getHidden() {
			return (int) $this->hidden;
		}


		public function setSex($sex) {
			$this->sex = $sex;
		}

		public function getSex() {
			return $this->sex;
		}


		public function setScreenName($screen_name) {
			$this->screen_name = $screen_name;
		}

		public function getScreenName() {
			return $this->screen_name;
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


		public function setOnline($online) {
			$this->online = $online;
		}

		public function getOnline() {
			return $this->online;
		}


		public function setOnlineMobile($online_mobile) {
			$this->online_mobile = $online_mobile;
		}

		public function getOnlineMobile() {
			return $this->online_mobile;
		}


		public function setOnlineApp($online_app) {
			$this->online_app = (int) $online_app;
		}

		public function getOnlineApp() {
			return (int) $this->online_app;
		}


		public function setType($type) {
			$this->type = $type;
		}

		public function getType() {
			return $this->type;
		}


		public function setInvitedBy($invited_by) {
			$this->invited_by = (int) $invited_by;
		}

		public function getInvitedBy() {
			return (int) $this->invited_by;
		}




	}
?>