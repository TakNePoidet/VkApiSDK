<?php

	namespace VkApiSDK\ApiTypes\Ads;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Stats extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'type' 	 => ApiTypes\Ads\ObjectType::class,
			'stats' 	 => ApiTypes\Ads\StatsFormat::class,
		];


		protected $id;
		protected $type;
		protected $stats;


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


		public function setStats($stats) {
			$this->stats = $stats;
		}

		public function getStats() {
			return $this->stats;
		}




	}
?>