<?php

	namespace VkApiSDK\ApiTypes\Friends;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class FriendStatus extends BaseType {

		protected static $requiredParams = ['user_id','friend_status'];


		protected static $map = [
			'user_id' 	 => true,
			'friend_status' 	 => true,
			'request_message' 	 => true,
			'read_state' 	 => ApiTypes\Base\BoolInt::class,
			'sign' 	 => true,
		];


		protected $user_id;
		protected $friend_status;
		protected $request_message;
		protected $read_state;
		protected $sign;


		public function setUserId($user_id) {
			$this->user_id = (int) $user_id;
		}

		public function getUserId() {
			return (int) $this->user_id;
		}


		public function setFriendStatus($friend_status) {
			$this->friend_status = (int) $friend_status;
		}

		public function getFriendStatus() {
			return (int) $this->friend_status;
		}


		public function setRequestMessage($request_message) {
			$this->request_message = $request_message;
		}

		public function getRequestMessage() {
			return $this->request_message;
		}


		public function setReadState($read_state) {
			$this->read_state = (int) $read_state;
		}

		public function getReadState() {
			return (int) $this->read_state;
		}


		public function setSign($sign) {
			$this->sign = $sign;
		}

		public function getSign() {
			return $this->sign;
		}




	}
?>