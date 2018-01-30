<?php

	namespace VkApiSDK\ApiTypes\Leads;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class LeadDays extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'impressions' 	 => true,
			'started' 	 => true,
			'completed' 	 => true,
			'spent' 	 => true,
		];


		protected $impressions;
		protected $started;
		protected $completed;
		protected $spent;


		public function setImpressions($impressions) {
			$this->impressions = (int) $impressions;
		}

		public function getImpressions() {
			return (int) $this->impressions;
		}


		public function setStarted($started) {
			$this->started = (int) $started;
		}

		public function getStarted() {
			return (int) $this->started;
		}


		public function setCompleted($completed) {
			$this->completed = (int) $completed;
		}

		public function getCompleted() {
			return (int) $this->completed;
		}


		public function setSpent($spent) {
			$this->spent = (int) $spent;
		}

		public function getSpent() {
			return (int) $this->spent;
		}




	}
?>