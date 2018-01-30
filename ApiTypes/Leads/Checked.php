<?php

	namespace VkApiSDK\ApiTypes\Leads;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Checked extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'result' 	 => true,
			'reason' 	 => true,
			'start_link' 	 => true,
			'sid' 	 => true,
		];


		protected $result;
		protected $reason;
		protected $start_link;
		protected $sid;


		public function setResult($result) {
			$this->result = $result;
		}

		public function getResult() {
			return $this->result;
		}


		public function setReason($reason) {
			$this->reason = $reason;
		}

		public function getReason() {
			return $this->reason;
		}


		public function setStartLink($start_link) {
			$this->start_link = $start_link;
		}

		public function getStartLink() {
			return $this->start_link;
		}


		public function setSid($sid) {
			$this->sid = $sid;
		}

		public function getSid() {
			return $this->sid;
		}




	}
?>