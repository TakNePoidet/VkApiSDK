<?php

	namespace VkApiSDK\ApiTypes\Polls;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Voters extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'answer_id' 	 => true,
			'users' 	 => ApiTypes\Polls\VotersUsers::class,
		];


		protected $answer_id;
		protected $users;


		public function setAnswerId($answer_id) {
			$this->answer_id = (int) $answer_id;
		}

		public function getAnswerId() {
			return (int) $this->answer_id;
		}


		public function setUsers($users) {
			$this->users = $users;
		}

		public function getUsers() {
			return $this->users;
		}




	}
?>