<?php

	namespace VkApiSDK\ApiTypes\Messages;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class IsMessagesFromGroupAllowedResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'is_allowed' 	 => ApiTypes\Base\BoolInt::class,
		];


		protected $is_allowed;


		public function setIsAllowed($is_allowed) {
			$this->is_allowed = $is_allowed;
		}

		public function getIsAllowed() {
			return $this->is_allowed;
		}




	}
?>