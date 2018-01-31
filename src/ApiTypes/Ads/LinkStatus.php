<?php

	namespace VkApiSDK\ApiTypes\Ads;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class LinkStatus extends BaseType {

		protected static $requiredParams = ['status','description','redirect_url'];


		protected static $map = [
			'status' 	 => true,
			'description' 	 => true,
			'redirect_url' 	 => true,
		];


		protected $status;
		protected $description;
		protected $redirect_url;


		public function setStatus($status) {
			$this->status = $status;
		}

		public function getStatus() {
			return $this->status;
		}


		public function setDescription($description) {
			$this->description = $description;
		}

		public function getDescription() {
			return $this->description;
		}


		public function setRedirectUrl($redirect_url) {
			$this->redirect_url = $redirect_url;
		}

		public function getRedirectUrl() {
			return $this->redirect_url;
		}




	}
?>