<?php

	namespace VkApiSDK\ApiTypes\Notifications;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Reply extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'date' 	 => true,
			'text' 	 => true,
		];


		protected $id;
		protected $date;
		protected $text;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setDate($date) {
			$this->date = (int) $date;
		}

		public function getDate() {
			return (int) $this->date;
		}


		public function setText($text) {
			$this->text = (int) $text;
		}

		public function getText() {
			return (int) $this->text;
		}




	}
?>