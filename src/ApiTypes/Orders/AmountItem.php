<?php

	namespace VkApiSDK\ApiTypes\Orders;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class AmountItem extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'votes' 	 => true,
			'amount' 	 => true,
			'description' 	 => true,
		];


		protected $votes;
		protected $amount;
		protected $description;


		public function setVotes($votes) {
			$this->votes = $votes;
		}

		public function getVotes() {
			return $this->votes;
		}


		public function setAmount($amount) {
			$this->amount = (int) $amount;
		}

		public function getAmount() {
			return (int) $this->amount;
		}


		public function setDescription($description) {
			$this->description = $description;
		}

		public function getDescription() {
			return $this->description;
		}




	}
?>