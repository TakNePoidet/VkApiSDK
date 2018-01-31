<?php

	namespace VkApiSDK\ApiTypes\Ads;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class RejectReason extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'comment' 	 => true,
			'rules' 	 => array(ApiTypes\Ads\Rules::class),
		];


		protected $comment;
		protected $rules;


		public function setComment($comment) {
			$this->comment = $comment;
		}

		public function getComment() {
			return $this->comment;
		}


		public function setRules($rules) {
			$this->rules = (array) $rules;
		}

		public function getRules() {
			return (array) $this->rules;
		}




	}
?>