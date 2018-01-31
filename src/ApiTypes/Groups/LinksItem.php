<?php

	namespace VkApiSDK\ApiTypes\Groups;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class LinksItem extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'url' 	 => true,
			'edit_title' 	 => ApiTypes\Base\BoolInt::class,
			'name' 	 => true,
			'desc' 	 => true,
			'photo_50' 	 => true,
			'photo_100' 	 => true,
		];


		protected $id;
		protected $url;
		protected $edit_title;
		protected $name;
		protected $desc;
		protected $photo_50;
		protected $photo_100;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setUrl($url) {
			$this->url = $url;
		}

		public function getUrl() {
			return $this->url;
		}


		public function setEditTitle($edit_title) {
			$this->edit_title = $edit_title;
		}

		public function getEditTitle() {
			return $this->edit_title;
		}


		public function setName($name) {
			$this->name = $name;
		}

		public function getName() {
			return $this->name;
		}


		public function setDesc($desc) {
			$this->desc = $desc;
		}

		public function getDesc() {
			return $this->desc;
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




	}
?>