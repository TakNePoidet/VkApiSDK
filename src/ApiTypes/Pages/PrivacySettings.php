<?php

	namespace VkApiSDK\ApiTypes\Pages;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class PrivacySettings extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'val_' 	 => true,
		];


		protected $val_;


		public function setVal($val_) {
			$this->val_ = $val_;
		}

		public function getVal() {
			return $this->val_;
		}




	}
?>