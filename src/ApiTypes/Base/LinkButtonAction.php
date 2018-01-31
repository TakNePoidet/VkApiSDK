<?php

	namespace VkApiSDK\ApiTypes\Base;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class LinkButtonAction extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'type' 	 => ApiTypes\Base\LinkButtonActionType::class,
			'url' 	 => true,
		];


		protected $type;
		protected $url;


		public function setType($type) {
			$this->type = $type;
		}

		public function getType() {
			return $this->type;
		}


		public function setUrl($url) {
			$this->url = $url;
		}

		public function getUrl() {
			return $this->url;
		}




	}
?>