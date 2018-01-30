<?php

	namespace VkApiSDK\ApiTypes\Board;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Topic extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'title' 	 => true,
			'created' 	 => true,
			'created_by' 	 => true,
			'updated' 	 => true,
			'updated_by' 	 => true,
			'is_closed' 	 => ApiTypes\Base\BoolInt::class,
			'is_fixed' 	 => ApiTypes\Base\BoolInt::class,
			'comments' 	 => true,
		];


		protected $id;
		protected $title;
		protected $created;
		protected $created_by;
		protected $updated;
		protected $updated_by;
		protected $is_closed;
		protected $is_fixed;
		protected $comments;


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


		public function setCreated($created) {
			$this->created = (int) $created;
		}

		public function getCreated() {
			return (int) $this->created;
		}


		public function setCreatedBy($created_by) {
			$this->created_by = (int) $created_by;
		}

		public function getCreatedBy() {
			return (int) $this->created_by;
		}


		public function setUpdated($updated) {
			$this->updated = (int) $updated;
		}

		public function getUpdated() {
			return (int) $this->updated;
		}


		public function setUpdatedBy($updated_by) {
			$this->updated_by = (int) $updated_by;
		}

		public function getUpdatedBy() {
			return (int) $this->updated_by;
		}


		public function setIsClosed($is_closed) {
			$this->is_closed = $is_closed;
		}

		public function getIsClosed() {
			return $this->is_closed;
		}


		public function setIsFixed($is_fixed) {
			$this->is_fixed = $is_fixed;
		}

		public function getIsFixed() {
			return $this->is_fixed;
		}


		public function setComments($comments) {
			$this->comments = (int) $comments;
		}

		public function getComments() {
			return (int) $this->comments;
		}




	}
?>