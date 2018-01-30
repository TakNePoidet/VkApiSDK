<?php

	namespace VkApiSDK\ApiTypes\Groups;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GroupLink extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'url' 	 => true,
			'edit_title' 	 => ApiTypes\Base\BoolInt::class,
			'desc' 	 => true,
			'image_processing' 	 => ApiTypes\Base\BoolInt::class,
		];


		protected $id;
		protected $url;
		protected $edit_title;
		protected $desc;
		protected $image_processing;


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


		public function setDesc($desc) {
			$this->desc = $desc;
		}

		public function getDesc() {
			return $this->desc;
		}


		public function setImageProcessing($image_processing) {
			$this->image_processing = $image_processing;
		}

		public function getImageProcessing() {
			return $this->image_processing;
		}




	}
?>