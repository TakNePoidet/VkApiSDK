<?php

	namespace VkApiSDK\ApiTypes\Friends;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Requests extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'user_id' 	 => true,
			'from' 	 => true,
			'mutual' 	 => ApiTypes\Friends\RequestsMutual::class,
		];


		protected $user_id;
		protected $from;
		protected $mutual;


		public function setUserId($user_id) {
			$this->user_id = (int) $user_id;
		}

		public function getUserId() {
			return (int) $this->user_id;
		}


		public function setFrom($from) {
			$this->from = $from;
		}

		public function getFrom() {
			return $this->from;
		}


		public function setMutual($mutual) {
			$this->mutual = $mutual;
		}

		public function getMutual() {
			return $this->mutual;
		}




	}
?>