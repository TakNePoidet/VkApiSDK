<?php

	namespace VkApiSDK\ApiTypes\Leads;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Lead extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'limit' 	 => true,
			'spent' 	 => true,
			'cost' 	 => true,
			'impressions' 	 => true,
			'started' 	 => true,
			'completed' 	 => true,
			'days' 	 => ApiTypes\Leads\LeadDays::class,
		];


		protected $limit;
		protected $spent;
		protected $cost;
		protected $impressions;
		protected $started;
		protected $completed;
		protected $days;


		public function setLimit($limit) {
			$this->limit = (int) $limit;
		}

		public function getLimit() {
			return (int) $this->limit;
		}


		public function setSpent($spent) {
			$this->spent = (int) $spent;
		}

		public function getSpent() {
			return (int) $this->spent;
		}


		public function setCost($cost) {
			$this->cost = (int) $cost;
		}

		public function getCost() {
			return (int) $this->cost;
		}


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


		public function setDays($days) {
			$this->days = $days;
		}

		public function getDays() {
			return $this->days;
		}




	}
?>