<?php

	namespace VkApiSDK\ApiTypes\Ads;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class TargSuggestionsRegions extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'name' 	 => true,
			'type' 	 => true,
		];


		protected $id;
		protected $name;
		protected $type;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setName($name) {
			$this->name = $name;
		}

		public function getName() {
			return $this->name;
		}


		public function setType($type) {
			$this->type = $type;
		}

		public function getType() {
			return $this->type;
		}




	}
?>