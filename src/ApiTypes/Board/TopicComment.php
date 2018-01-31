<?php

	namespace VkApiSDK\ApiTypes\Board;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class TopicComment extends BaseType {

		protected static $requiredParams = ['id','from_id','date','text'];


		protected static $map = [
			'id' 	 => true,
			'from_id' 	 => true,
			'date' 	 => true,
			'text' 	 => true,
			'attachments' 	 => array(ApiTypes\Wall\CommentAttachment::class),
			'real_offset' 	 => true,
		];


		protected $id;
		protected $from_id;
		protected $date;
		protected $text;
		protected $attachments;
		protected $real_offset;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setFromId($from_id) {
			$this->from_id = (int) $from_id;
		}

		public function getFromId() {
			return (int) $this->from_id;
		}


		public function setDate($date) {
			$this->date = (int) $date;
		}

		public function getDate() {
			return (int) $this->date;
		}


		public function setText($text) {
			$this->text = $text;
		}

		public function getText() {
			return $this->text;
		}


		public function setAttachments($attachments) {
			$this->attachments = (array) $attachments;
		}

		public function getAttachments() {
			return (array) $this->attachments;
		}


		public function setRealOffset($real_offset) {
			$this->real_offset = (int) $real_offset;
		}

		public function getRealOffset() {
			return (int) $this->real_offset;
		}




	}
?>