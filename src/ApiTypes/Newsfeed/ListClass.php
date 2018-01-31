<?php

	namespace VkApiSDK\ApiTypes\Newsfeed;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class ListClass extends BaseType {

		protected static $requiredParams = ['id','title'];


		protected static $map = [
			'id' 	 => true,
			'title' 	 => true,
		];


		protected $id;
		protected $title;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setTitle($title) {
			$this->title = $title;
		}

		public function getTitle() {
			return $this->title;
		}




	}
?>