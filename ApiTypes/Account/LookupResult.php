<?php

	namespace VkApiSDK\ApiTypes\Account;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class LookupResult extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'found' 	 => array(ApiTypes\Account\UserXtrContact::class),
			'other' 	 => array(ApiTypes\Account\OtherContact::class),
		];


		protected $found;
		protected $other;


		public function setFound($found) {
			$this->found = (array) $found;
		}

		public function getFound() {
			return (array) $this->found;
		}


		public function setOther($other) {
			$this->other = (array) $other;
		}

		public function getOther() {
			return (array) $this->other;
		}




	}
?>