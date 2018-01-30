<?php

	namespace VkApiSDK\ApiTypes\Friends;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class AddListClassResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'list_id' 	 => true,
		];


		protected $list_id;


		public function setListId($list_id) {
			$this->list_id = (int) $list_id;
		}

		public function getListId() {
			return (int) $this->list_id;
		}




	}
?>