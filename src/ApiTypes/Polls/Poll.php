<?php

	namespace VkApiSDK\ApiTypes\Polls;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Poll extends BaseType {

		protected static $requiredParams = ['id','owner_id','created','question','votes','answer_id','answers','anonymous'];


		protected static $map = [
			'id' 	 => true,
			'owner_id' 	 => true,
			'created' 	 => true,
			'question' 	 => true,
			'votes' 	 => true,
			'answer_id' 	 => true,
			'answers' 	 => array(ApiTypes\Polls\Answer::class),
			'anonymous' 	 => ApiTypes\Base\BoolInt::class,
		];


		protected $id;
		protected $owner_id;
		protected $created;
		protected $question;
		protected $votes;
		protected $answer_id;
		protected $answers;
		protected $anonymous;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setOwnerId($owner_id) {
			$this->owner_id = (int) $owner_id;
		}

		public function getOwnerId() {
			return (int) $this->owner_id;
		}


		public function setCreated($created) {
			$this->created = (int) $created;
		}

		public function getCreated() {
			return (int) $this->created;
		}


		public function setQuestion($question) {
			$this->question = $question;
		}

		public function getQuestion() {
			return $this->question;
		}


		public function setVotes($votes) {
			$this->votes = $votes;
		}

		public function getVotes() {
			return $this->votes;
		}


		public function setAnswerId($answer_id) {
			$this->answer_id = (int) $answer_id;
		}

		public function getAnswerId() {
			return (int) $this->answer_id;
		}


		public function setAnswers($answers) {
			$this->answers = (array) $answers;
		}

		public function getAnswers() {
			return (array) $this->answers;
		}


		public function setAnonymous($anonymous) {
			$this->anonymous = $anonymous;
		}

		public function getAnonymous() {
			return $this->anonymous;
		}




	}
?>