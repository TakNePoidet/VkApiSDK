<?php

	namespace VkApiSDK\ApiTypes\Base;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class LinkApplication extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'app_id' 	 => true,
			'store' 	 => ApiTypes\Base\LinkApplicationStore::class,
		];


		protected $app_id;
		protected $store;


		public function setAppId($app_id) {
			$this->app_id = (int) $app_id;
		}

		public function getAppId() {
			return (int) $this->app_id;
		}


		public function setStore($store) {
			$this->store = $store;
		}

		public function getStore() {
			return $this->store;
		}




	}
?>