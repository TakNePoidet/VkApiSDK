<?php

	namespace VkApiSDK\ApiTypes\Stats;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class WallpostStat extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'reach_subscribers' 	 => true,
			'reach_total' 	 => true,
			'links' 	 => true,
			'to_group' 	 => true,
			'join_group' 	 => true,
			'report' 	 => true,
			'hide' 	 => true,
			'unsubscribe' 	 => true,
		];


		protected $reach_subscribers;
		protected $reach_total;
		protected $links;
		protected $to_group;
		protected $join_group;
		protected $report;
		protected $hide;
		protected $unsubscribe;


		public function setReachSubscribers($reach_subscribers) {
			$this->reach_subscribers = (int) $reach_subscribers;
		}

		public function getReachSubscribers() {
			return (int) $this->reach_subscribers;
		}


		public function setReachTotal($reach_total) {
			$this->reach_total = (int) $reach_total;
		}

		public function getReachTotal() {
			return (int) $this->reach_total;
		}


		public function setLinks($links) {
			$this->links = (int) $links;
		}

		public function getLinks() {
			return (int) $this->links;
		}


		public function setToGroup($to_group) {
			$this->to_group = (int) $to_group;
		}

		public function getToGroup() {
			return (int) $this->to_group;
		}


		public function setJoinGroup($join_group) {
			$this->join_group = (int) $join_group;
		}

		public function getJoinGroup() {
			return (int) $this->join_group;
		}


		public function setReport($report) {
			$this->report = (int) $report;
		}

		public function getReport() {
			return (int) $this->report;
		}


		public function setHide($hide) {
			$this->hide = (int) $hide;
		}

		public function getHide() {
			return (int) $this->hide;
		}


		public function setUnsubscribe($unsubscribe) {
			$this->unsubscribe = (int) $unsubscribe;
		}

		public function getUnsubscribe() {
			return (int) $this->unsubscribe;
		}




	}
?>