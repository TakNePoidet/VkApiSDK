<?php

	namespace VkApiSDK\ApiTypes\Ads;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class FloodStats extends BaseType {

		protected static $requiredParams = ['left','refresh'];


		protected static $map = [
			'left' 	 => true,
			'refresh' 	 => true,
		];


		protected $left;
		protected $refresh;


		public function setLeft($left) {
			$this->left = (int) $left;
		}

		public function getLeft() {
			return (int) $this->left;
		}


		public function setRefresh($refresh) {
			$this->refresh = (int) $refresh;
		}

		public function getRefresh() {
			return (int) $this->refresh;
		}




	}
?>