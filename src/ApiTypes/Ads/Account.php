<?php

	namespace VkApiSDK\ApiTypes\Ads;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Account extends BaseType {

		protected static $requiredParams = ['account_id','account_type','account_status','access_role'];


		protected static $map = [
			'account_id' 	 => true,
			'account_type' 	 => true,
			'account_status' 	 => ApiTypes\Base\BoolInt::class,
			'access_role' 	 => ApiTypes\Ads\AccessRole::class,
		];


		protected $account_id;
		protected $account_type;
		protected $account_status;
		protected $access_role;


		public function setAccountId($account_id) {
			$this->account_id = (int) $account_id;
		}

		public function getAccountId() {
			return (int) $this->account_id;
		}


		public function setAccountType($account_type) {
			$this->account_type = $account_type;
		}

		public function getAccountType() {
			return $this->account_type;
		}


		public function setAccountStatus($account_status) {
			$this->account_status = $account_status;
		}

		public function getAccountStatus() {
			return $this->account_status;
		}


		public function setAccessRole($access_role) {
			$this->access_role = $access_role;
		}

		public function getAccessRole() {
			return $this->access_role;
		}




	}
?>