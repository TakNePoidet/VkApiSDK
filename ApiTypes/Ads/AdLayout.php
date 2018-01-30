<?php

	namespace VkApiSDK\ApiTypes\Ads;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class AdLayout extends BaseType {

		protected static $requiredParams = ['id','campaign_id','ad_format','cost_type','title','description','link_url','image_src'];


		protected static $map = [
			'id' 	 => true,
			'campaign_id' 	 => true,
			'ad_format' 	 => true,
			'cost_type' 	 => true,
			'video' 	 => ApiTypes\Base\BoolInt::class,
			'title' 	 => true,
			'description' 	 => true,
			'link_url' 	 => true,
			'link_domain' 	 => true,
			'preview_link' 	 => true,
			'image_src' 	 => true,
			'image_src_2x' 	 => true,
		];


		protected $id;
		protected $campaign_id;
		protected $ad_format;
		protected $cost_type;
		protected $video;
		protected $title;
		protected $description;
		protected $link_url;
		protected $link_domain;
		protected $preview_link;
		protected $image_src;
		protected $image_src_2x;


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


		public function setVideo($video) {
			$this->video = $video;
		}

		public function getVideo() {
			return $this->video;
		}


		public function setTitle($title) {
			$this->title = $title;
		}

		public function getTitle() {
			return $this->title;
		}


		public function setDescription($description) {
			$this->description = $description;
		}

		public function getDescription() {
			return $this->description;
		}


		public function setLinkUrl($link_url) {
			$this->link_url = $link_url;
		}

		public function getLinkUrl() {
			return $this->link_url;
		}


		public function setLinkDomain($link_domain) {
			$this->link_domain = $link_domain;
		}

		public function getLinkDomain() {
			return $this->link_domain;
		}


		public function setPreviewLink($preview_link) {
			$this->preview_link = $preview_link;
		}

		public function getPreviewLink() {
			return $this->preview_link;
		}


		public function setImageSrc($image_src) {
			$this->image_src = (int) $image_src;
		}

		public function getImageSrc() {
			return (int) $this->image_src;
		}


		public function setImageSrc2x($image_src_2x) {
			$this->image_src_2x = (int) $image_src_2x;
		}

		public function getImageSrc2x() {
			return (int) $this->image_src_2x;
		}




	}
?>