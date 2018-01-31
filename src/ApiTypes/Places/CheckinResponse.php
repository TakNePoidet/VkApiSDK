<?php

	namespace VkApiSDK\ApiTypes\Places;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class CheckinResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
		];


		protected $id;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}




	}
?>