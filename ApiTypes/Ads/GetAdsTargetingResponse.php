<?php

	namespace VkApiSDK\ApiTypes\Ads;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetAdsTargetingResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'response' 	 => array(ApiTypes\Ads\TargSettings::class),
		];


		protected $response;


		public function setResponse($response) {
			$this->response = $response;
		}

		public function getResponse() {
			return $this->response;
		}




	}
?>