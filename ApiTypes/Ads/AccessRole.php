<?php

	namespace VkApiSDK\ApiTypes\Ads;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class AccessRole extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'val' 	 => this,
		];


		protected $val;


		public function setVal($val) {
			$this->val = $val;
		}

		public function getVal() {
			return $this->val;
		}




	}
?>