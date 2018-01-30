<?php

	namespace VkApiSDK\ApiTypes\Ads;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Ad extends BaseType {

		protected static $requiredParams = ['id','campaign_id','ad_format','cost_type','all_limit','status','name','approved'];


		protected static $map = [
			'id' 	 => true,
			'campaign_id' 	 => true,
			'ad_format' 	 => true,
			'cost_type' 	 => true,
			'cpc' 	 => true,
			'cpm' 	 => true,
			'impressions_limit' 	 => true,
			'impressions_limited' 	 => ApiTypes\Base\BoolInt::class,
			'ad_platform' 	 => true,
			'all_limit' 	 => true,
			'category1_id' 	 => true,
			'category2_id' 	 => true,
			'status' 	 => true,
			'name' 	 => true,
			'approved' 	 => true,
			'video' 	 => ApiTypes\Base\BoolInt::class,
			'disclaimer_medical' 	 => ApiTypes\Base\BoolInt::class,
			'disclaimer_specialist' 	 => ApiTypes\Base\BoolInt::class,
			'disclaimer_supplements' 	 => ApiTypes\Base\BoolInt::class,
		];


		protected $id;
		protected $campaign_id;
		protected $ad_format;
		protected $cost_type;
		protected $cpc;
		protected $cpm;
		protected $impressions_limit;
		protected $impressions_limited;
		protected $ad_platform;
		protected $all_limit;
		protected $category1_id;
		protected $category2_id;
		protected $status;
		protected $name;
		protected $approved;
		protected $video;
		protected $disclaimer_medical;
		protected $disclaimer_specialist;
		protected $disclaimer_supplements;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setCampaignId($campaign_id) {
			$this->campaign_id = (int) $campaign_id;
		}

		public function getCampaignId() {
			return (int) $this->campaign_id;
		}


		public function setAdFormat($ad_format) {
			$this->ad_format = (int) $ad_format;
		}

		public function getAdFormat() {
			return (int) $this->ad_format;
		}


		public function setCostType($cost_type) {
			$this->cost_type = (int) $cost_type;
		}

		public function getCostType() {
			return (int) $this->cost_type;
		}


		public function setCpc($cpc) {
			$this->cpc = (int) $cpc;
		}

		public function getCpc() {
			return (int) $this->cpc;
		}


		public function setCpm($cpm) {
			$this->cpm = (int) $cpm;
		}

		public function getCpm() {
			return (int) $this->cpm;
		}


		public function setImpressionsLimit($impressions_limit) {
			$this->impressions_limit = (int) $impressions_limit;
		}

		public function getImpressionsLimit() {
			return (int) $this->impressions_limit;
		}


		public function setImpressionsLimited($impressions_limited) {
			$this->impressions_limited = (int) $impressions_limited;
		}

		public function getImpressionsLimited() {
			return (int) $this->impressions_limited;
		}


		public function setAdPlatform($ad_platform) {
			$this->ad_platform = $ad_platform;
		}

		public function getAdPlatform() {
			return $this->ad_platform;
		}


		public function setAllLimit($all_limit) {
			$this->all_limit = (int) $all_limit;
		}

		public function getAllLimit() {
			return (int) $this->all_limit;
		}


		public function setCategory1Id($category1_id) {
			$this->category1_id = (int) $category1_id;
		}

		public function getCategory1Id() {
			return (int) $this->category1_id;
		}


		public function setCategory2Id($category2_id) {
			$this->category2_id = (int) $category2_id;
		}

		public function getCategory2Id() {
			return (int) $this->category2_id;
		}


		public function setStatus($status) {
			$this->status = (int) $status;
		}

		public function getStatus() {
			return (int) $this->status;
		}


		public function setName($name) {
			$this->name = $name;
		}

		public function getName() {
			return $this->name;
		}


		public function setApproved($approved) {
			$this->approved = (int) $approved;
		}

		public function getApproved() {
			return (int) $this->approved;
		}


		public function setVideo($video) {
			$this->video = $video;
		}

		public function getVideo() {
			return $this->video;
		}


		public function setDisclaimerMedical($disclaimer_medical) {
			$this->disclaimer_medical = $disclaimer_medical;
		}

		public function getDisclaimerMedical() {
			return $this->disclaimer_medical;
		}


		public function setDisclaimerSpecialist($disclaimer_specialist) {
			$this->disclaimer_specialist = $disclaimer_specialist;
		}

		public function getDisclaimerSpecialist() {
			return $this->disclaimer_specialist;
		}


		public function setDisclaimerSupplements($disclaimer_supplements) {
			$this->disclaimer_supplements = $disclaimer_supplements;
		}

		public function getDisclaimerSupplements() {
			return $this->disclaimer_supplements;
		}




	}
?>