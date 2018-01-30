<?php

	namespace VkApiSDK\ApiTypes\Friends;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class DeleteResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'success' 	 => ApiTypes\Base\OkResponse::class,
			'friend_deleted' 	 => true,
			'out_request_deleted' 	 => true,
			'in_request_deleted' 	 => true,
			'suggestion_deleted' 	 => true,
		];


		protected $success;
		protected $friend_deleted;
		protected $out_request_deleted;
		protected $in_request_deleted;
		protected $suggestion_deleted;


		public function setSuccess($success) {
			$this->success = $success;
		}

		public function getSuccess() {
			return $this->success;
		}


		public function setFriendDeleted($friend_deleted) {
			$this->friend_deleted = (int) $friend_deleted;
		}

		public function getFriendDeleted() {
			return (int) $this->friend_deleted;
		}


		public function setOutRequestDeleted($out_request_deleted) {
			$this->out_request_deleted = (int) $out_request_deleted;
		}

		public function getOutRequestDeleted() {
			return (int) $this->out_request_deleted;
		}


		public function setInRequestDeleted($in_request_deleted) {
			$this->in_request_deleted = (int) $in_request_deleted;
		}

		public function getInRequestDeleted() {
			return (int) $this->in_request_deleted;
		}


		public function setSuggestionDeleted($suggestion_deleted) {
			$this->suggestion_deleted = (int) $suggestion_deleted;
		}

		public function getSuggestionDeleted() {
			return (int) $this->suggestion_deleted;
		}




	}
?>