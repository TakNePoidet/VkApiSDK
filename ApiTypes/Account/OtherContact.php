<?php

	namespace VkApiSDK\ApiTypes\Account;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class OtherContact extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'contact' 	 => true,
			'common_count' 	 => true,
		];


		protected $contact;
		protected $common_count;


		public function setContact($contact) {
			$this->contact = $contact;
		}

		public function getContact() {
			return $this->contact;
		}


		public function setCommonCount($common_count) {
			$this->common_count = (int) $common_count;
		}

		public function getCommonCount() {
			return (int) $this->common_count;
		}




	}
?>