<?php

	namespace VkApiSDK\ApiTypes\Leads;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class MetricHitResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'result' 	 => true,
			'redirect_link' 	 => true,
		];


		protected $result;
		protected $redirect_link;


		public function setResult($result) {
			$this->result = (bool) $result;
		}

		public function getResult() {
			return (bool) $this->result;
		}


		public function setRedirectLink($redirect_link) {
			$this->redirect_link = $redirect_link;
		}

		public function getRedirectLink() {
			return $this->redirect_link;
		}




	}
?>