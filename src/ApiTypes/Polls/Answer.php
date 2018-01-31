<?php

	namespace VkApiSDK\ApiTypes\Polls;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Answer extends BaseType {

		protected static $requiredParams = ['id','text','votes','rate'];


		protected static $map = [
			'id' 	 => true,
			'text' 	 => true,
			'votes' 	 => true,
			'rate' 	 => true,
		];


		protected $id;
		protected $text;
		protected $votes;
		protected $rate;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setText($text) {
			$this->text = $text;
		}

		public function getText() {
			return $this->text;
		}


		public function setVotes($votes) {
			$this->votes = (int) $votes;
		}

		public function getVotes() {
			return (int) $this->votes;
		}


		public function setRate($rate) {
			$this->rate = (int) $rate;
		}

		public function getRate() {
			return (int) $this->rate;
		}




	}
?>