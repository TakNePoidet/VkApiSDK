<?php

	namespace VkApiSDK\ApiTypes\Utils;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class LinkChecked extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'status' 	 => true,
			'link' 	 => true,
		];


		protected $status;
		protected $link;


		public function setStatus($status) {
			$this->status = $status;
		}

		public function getStatus() {
			return $this->status;
		}


		public function setLink($link) {
			$this->link = $link;
		}

		public function getLink() {
			return $this->link;
		}




	}
?>