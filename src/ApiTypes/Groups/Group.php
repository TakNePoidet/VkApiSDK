<?php

	namespace VkApiSDK\ApiTypes\Groups;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Group extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'name' 	 => true,
			'screen_name' 	 => true,
			'deactivated' 	 => true,
			'is_closed' 	 => true,
			'type' 	 => true,
			'is_admin' 	 => ApiTypes\Base\BoolInt::class,
			'admin_level' 	 => true,
			'is_member' 	 => ApiTypes\Base\BoolInt::class,
			'photo_50' 	 => true,
			'photo_100' 	 => true,
			'photo_200' 	 => true,
		];


		protected $id;
		protected $name;
		protected $screen_name;
		protected $deactivated;
		protected $is_closed;
		protected $type;
		protected $is_admin;
		protected $admin_level;
		protected $is_member;
		protected $photo_50;
		protected $photo_100;
		protected $photo_200;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setName($name) {
			$this->name = $name;
		}

		public function getName() {
			return $this->name;
		}


		public function setScreenName($screen_name) {
			$this->screen_name = $screen_name;
		}

		public function getScreenName() {
			return $this->screen_name;
		}


		public function setDeactivated($deactivated) {
			$this->deactivated = $deactivated;
		}

		public function getDeactivated() {
			return $this->deactivated;
		}


		public function setIsClosed($is_closed) {
			$this->is_closed = (int) $is_closed;
		}

		public function getIsClosed() {
			return (int) $this->is_closed;
		}


		public function setType($type) {
			$this->type = $type;
		}

		public function getType() {
			return $this->type;
		}


		public function setIsAdmin($is_admin) {
			$this->is_admin = $is_admin;
		}

		public function getIsAdmin() {
			return $this->is_admin;
		}


		public function setAdminLevel($admin_level) {
			$this->admin_level = (int) $admin_level;
		}

		public function getAdminLevel() {
			return (int) $this->admin_level;
		}


		public function setIsMember($is_member) {
			$this->is_member = $is_member;
		}

		public function getIsMember() {
			return $this->is_member;
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