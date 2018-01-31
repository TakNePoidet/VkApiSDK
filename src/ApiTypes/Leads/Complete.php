<?php

	namespace VkApiSDK\ApiTypes\Leads;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Complete extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'limit' 	 => true,
			'spent' 	 => true,
			'cost' 	 => true,
			'test_mode' 	 => ApiTypes\Base\BoolInt::class,
			'success' 	 => ApiTypes\Base\OkResponse::class,
		];


		protected $limit;
		protected $spent;
		protected $cost;
		protected $test_mode;
		protected $success;


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


		public function setTestMode($test_mode) {
			$this->test_mode = $test_mode;
		}

		public function getTestMode() {
			return $this->test_mode;
		}


		public function setSuccess($success) {
			$this->success = $success;
		}

		public function getSuccess() {
			return $this->success;
		}




	}
?>