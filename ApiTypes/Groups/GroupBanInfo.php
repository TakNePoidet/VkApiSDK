<?php

	namespace VkApiSDK\ApiTypes\Groups;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GroupBanInfo extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'end_date' 	 => true,
			'comment' 	 => true,
		];


		protected $end_date;
		protected $comment;


		public function setEndDate($end_date) {
			$this->end_date = (int) $end_date;
		}

		public function getEndDate() {
			return (int) $this->end_date;
		}


		public function setComment($comment) {
			$this->comment = $comment;
		}

		public function getComment() {
			return $this->comment;
		}




	}
?>