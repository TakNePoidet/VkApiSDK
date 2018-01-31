<?php

	namespace VkApiSDK\ApiTypes\Board;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class DefaultOrder extends BaseType {

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