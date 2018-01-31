<?php

	namespace VkApiSDK\ApiTypes\Newsfeed;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class ListClassFull extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'title' 	 => true,
			'no_reposts' 	 => ApiTypes\Base\BoolInt::class,
			'source_ids' 	 => true,
		];


		protected $id;
		protected $title;
		protected $no_reposts;
		protected $source_ids;


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


		public function setNoReposts($no_reposts) {
			$this->no_reposts = $no_reposts;
		}

		public function getNoReposts() {
			return $this->no_reposts;
		}


		public function setSourceIds($source_ids) {
			$this->source_ids = (array) $source_ids;
		}

		public function getSourceIds() {
			return (array) $this->source_ids;
		}




	}
?>