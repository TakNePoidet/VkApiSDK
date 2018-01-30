<?php

	namespace VkApiSDK\ApiTypes\Notes;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class NoteComment extends BaseType {

		protected static $requiredParams = ['id','uid','nid','oid','date','message'];


		protected static $map = [
			'id' 	 => true,
			'uid' 	 => true,
			'nid' 	 => true,
			'oid' 	 => true,
			'date' 	 => true,
			'message' 	 => true,
			'reply_to' 	 => true,
		];


		protected $id;
		protected $uid;
		protected $nid;
		protected $oid;
		protected $date;
		protected $message;
		protected $reply_to;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setUid($uid) {
			$this->uid = (int) $uid;
		}

		public function getUid() {
			return (int) $this->uid;
		}


		public function setNid($nid) {
			$this->nid = (int) $nid;
		}

		public function getNid() {
			return (int) $this->nid;
		}


		public function setOid($oid) {
			$this->oid = (int) $oid;
		}

		public function getOid() {
			return (int) $this->oid;
		}


		public function setDate($date) {
			$this->date = (int) $date;
		}

		public function getDate() {
			return (int) $this->date;
		}


		public function setMessage($message) {
			$this->message = $message;
		}

		public function getMessage() {
			return $this->message;
		}


		public function setReplyTo($reply_to) {
			$this->reply_to = (int) $reply_to;
		}

		public function getReplyTo() {
			return (int) $this->reply_to;
		}




	}
?>