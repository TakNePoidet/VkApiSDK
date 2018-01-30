<?php

	namespace VkApiSDK\ApiTypes\Utils;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class DomainResolved extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'type' 	 => true,
			'object_id' 	 => true,
		];


		protected $type;
		protected $object_id;


		public function setType($type) {
			$this->type = $type;
		}

		public function getType() {
			return $this->type;
		}


		public function setObjectId($object_id) {
			$this->object_id = (int) $object_id;
		}

		public function getObjectId() {
			return (int) $this->object_id;
		}




	}
?>