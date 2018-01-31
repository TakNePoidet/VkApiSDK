<?php

	namespace VkApiSDK\ApiTypes\Leads;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Start extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'test_mode' 	 => ApiTypes\Base\BoolInt::class,
			'vk_sid' 	 => true,
		];


		protected $test_mode;
		protected $vk_sid;


		public function setTestMode($test_mode) {
			$this->test_mode = $test_mode;
		}

		public function getTestMode() {
			return $this->test_mode;
		}


		public function setVkSid($vk_sid) {
			$this->vk_sid = $vk_sid;
		}

		public function getVkSid() {
			return $this->vk_sid;
		}




	}
?>