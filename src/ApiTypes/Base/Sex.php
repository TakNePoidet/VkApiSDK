<?php

	namespace VkApiSDK\ApiTypes\Base;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Sex extends BaseType {

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