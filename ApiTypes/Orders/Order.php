<?php

	namespace VkApiSDK\ApiTypes\Orders;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Order extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'app_order_id' 	 => true,
			'status' 	 => true,
			'user_id' 	 => true,
			'receiver_id' 	 => true,
			'item' 	 => true,
			'amount' 	 => true,
			'date' 	 => true,
			'transaction_id' 	 => true,
			'cancel_transaction_id' 	 => true,
		];


		protected $id;
		protected $app_order_id;
		protected $status;
		protected $user_id;
		protected $receiver_id;
		protected $item;
		protected $amount;
		protected $date;
		protected $transaction_id;
		protected $cancel_transaction_id;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setAppOrderId($app_order_id) {
			$this->app_order_id = (int) $app_order_id;
		}

		public function getAppOrderId() {
			return (int) $this->app_order_id;
		}


		public function setStatus($status) {
			$this->status = $status;
		}

		public function getStatus() {
			return $this->status;
		}


		public function setUserId($user_id) {
			$this->user_id = (int) $user_id;
		}

		public function getUserId() {
			return (int) $this->user_id;
		}


		public function setReceiverId($receiver_id) {
			$this->receiver_id = (int) $receiver_id;
		}

		public function getReceiverId() {
			return (int) $this->receiver_id;
		}


		public function setItem($item) {
			$this->item = $item;
		}

		public function getItem() {
			return $this->item;
		}


		public function setAmount($amount) {
			$this->amount = (int) $amount;
		}

		public function getAmount() {
			return (int) $this->amount;
		}


		public function setDate($date) {
			$this->date = (int) $date;
		}

		public function getDate() {
			return (int) $this->date;
		}


		public function setTransactionId($transaction_id) {
			$this->transaction_id = (int) $transaction_id;
		}

		public function getTransactionId() {
			return (int) $this->transaction_id;
		}


		public function setCancelTransactionId($cancel_transaction_id) {
			$this->cancel_transaction_id = (int) $cancel_transaction_id;
		}

		public function getCancelTransactionId() {
			return (int) $this->cancel_transaction_id;
		}




	}
?>