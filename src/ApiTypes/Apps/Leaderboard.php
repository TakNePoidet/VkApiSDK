<?php

	namespace VkApiSDK\ApiTypes\Apps;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Leaderboard extends BaseType {

		protected static $requiredParams = ['user_id'];


		protected static $map = [
			'score' 	 => true,
			'level' 	 => true,
			'points' 	 => true,
			'user_id' 	 => true,
		];


		protected $score;
		protected $level;
		protected $points;
		protected $user_id;


		public function setScore($score) {
			$this->score = (int) $score;
		}

		public function getScore() {
			return (int) $this->score;
		}


		public function setLevel($level) {
			$this->level = (int) $level;
		}

		public function getLevel() {
			return (int) $this->level;
		}


		public function setPoints($points) {
			$this->points = (int) $points;
		}

		public function getPoints() {
			return (int) $this->points;
		}


		public function setUserId($user_id) {
			$this->user_id = (int) $user_id;
		}

		public function getUserId() {
			return (int) $this->user_id;
		}




	}
?>