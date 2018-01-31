<?php

	namespace VkApiSDK\ApiTypes\Board;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class TopicPoll extends BaseType {

		protected static $requiredParams = ['poll_id','owner_id','created','question','votes','answer_id','answers'];


		protected static $map = [
			'poll_id' 	 => true,
			'owner_id' 	 => true,
			'created' 	 => true,
			'is_closed' 	 => ApiTypes\Base\BoolInt::class,
			'question' 	 => true,
			'votes' 	 => true,
			'answer_id' 	 => true,
			'answers' 	 => array(ApiTypes\Polls\Answer::class),
		];


		protected $poll_id;
		protected $owner_id;
		protected $created;
		protected $is_closed;
		protected $question;
		protected $votes;
		protected $answer_id;
		protected $answers;


		public function setPollId($poll_id) {
			$this->poll_id = (int) $poll_id;
		}

		public function getPollId() {
			return (int) $this->poll_id;
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


		public function setIsClosed($is_closed) {
			$this->is_closed = $is_closed;
		}

		public function getIsClosed() {
			return $this->is_closed;
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




	}
?>