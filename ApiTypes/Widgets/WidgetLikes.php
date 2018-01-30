<?php

	namespace VkApiSDK\ApiTypes\Widgets;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class WidgetLikes extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'count' 	 => true,
		];


		protected $count;


		public function setCount($count) {
			$this->count = (int) $count;
		}

		public function getCount() {
			return (int) $this->count;
		}




	}
?>