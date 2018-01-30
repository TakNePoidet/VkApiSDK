<?php

	namespace VkApiSDK\ApiTypes\Ads;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Campaign extends BaseType {

		protected static $requiredParams = ['id','type','name','status','day_limit','all_limit','start_time','stop_time'];


		protected static $map = [
			'id' 	 => true,
			'type' 	 => true,
			'name' 	 => true,
			'status' 	 => true,
			'day_limit' 	 => true,
			'all_limit' 	 => true,
			'start_time' 	 => true,
			'stop_time' 	 => true,
		];


		protected $id;
		protected $type;
		protected $name;
		protected $status;
		protected $day_limit;
		protected $all_limit;
		protected $start_time;
		protected $stop_time;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setType($type) {
			$this->type = $type;
		}

		public function getType() {
			return $this->type;
		}


		public function setName($name) {
			$this->name = $name;
		}

		public function getName() {
			return $this->name;
		}


		public function setStatus($status) {
			$this->status = (int) $status;
		}

		public function getStatus() {
			return (int) $this->status;
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


		public function setStartTime($start_time) {
			$this->start_time = (int) $start_time;
		}

		public function getStartTime() {
			return (int) $this->start_time;
		}


		public function setStopTime($stop_time) {
			$this->stop_time = (int) $stop_time;
		}

		public function getStopTime() {
			return (int) $this->stop_time;
		}




	}
?>