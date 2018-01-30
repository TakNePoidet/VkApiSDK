<?php

	namespace VkApiSDK\ApiTypes\Ads;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class TargStats extends BaseType {

		protected static $requiredParams = ['audience_count'];


		protected static $map = [
			'audience_count' 	 => true,
			'recommended_cpc' 	 => true,
			'recommended_cpm' 	 => true,
		];


		protected $audience_count;
		protected $recommended_cpc;
		protected $recommended_cpm;


		public function setAudienceCount($audience_count) {
			$this->audience_count = (int) $audience_count;
		}

		public function getAudienceCount() {
			return (int) $this->audience_count;
		}


		public function setRecommendedCpc($recommended_cpc) {
			$this->recommended_cpc = (int) $recommended_cpc;
		}

		public function getRecommendedCpc() {
			return (int) $this->recommended_cpc;
		}


		public function setRecommendedCpm($recommended_cpm) {
			$this->recommended_cpm = (int) $recommended_cpm;
		}

		public function getRecommendedCpm() {
			return (int) $this->recommended_cpm;
		}




	}
?>