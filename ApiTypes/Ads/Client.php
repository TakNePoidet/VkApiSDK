<?php

	namespace VkApiSDK\ApiTypes\Ads;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Client extends BaseType {

		protected static $requiredParams = ['id','name','day_limit','all_limit'];


		protected static $map = [
			'id' 	 => true,
			'name' 	 => true,
			'day_limit' 	 => true,
			'all_limit' 	 => true,
		];


		protected $id;
		protected $name;
		protected $day_limit;
		protected $all_limit;


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


		public function setDayLimit($day_limit) {
			$this->day_limit = $day_limit;
		}

		public function getDayLimit() {
			return $this->day_limit;
		}


		public function setAllLimit($all_limit) {
			$this->all_limit = $all_limit;
		}

		public function getAllLimit() {
			return $this->all_limit;
		}




	}
?>