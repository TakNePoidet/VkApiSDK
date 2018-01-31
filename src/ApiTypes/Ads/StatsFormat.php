<?php

	namespace VkApiSDK\ApiTypes\Ads;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class StatsFormat extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'day' 	 => true,
			'month' 	 => true,
			'overall' 	 => true,
			'spent' 	 => true,
			'impressions' 	 => true,
			'clicks' 	 => true,
			'reach' 	 => true,
			'video_views' 	 => true,
			'video_views_half' 	 => true,
			'video_views_full' 	 => true,
			'video_clicks_site' 	 => true,
			'join_rate' 	 => true,
		];


		protected $day;
		protected $month;
		protected $overall;
		protected $spent;
		protected $impressions;
		protected $clicks;
		protected $reach;
		protected $video_views;
		protected $video_views_half;
		protected $video_views_full;
		protected $video_clicks_site;
		protected $join_rate;


		public function setDay($day) {
			$this->day = $day;
		}

		public function getDay() {
			return $this->day;
		}


		public function setMonth($month) {
			$this->month = $month;
		}

		public function getMonth() {
			return $this->month;
		}


		public function setOverall($overall) {
			$this->overall = (int) $overall;
		}

		public function getOverall() {
			return (int) $this->overall;
		}


		public function setSpent($spent) {
			$this->spent = (int) $spent;
		}

		public function getSpent() {
			return (int) $this->spent;
		}


		public function setImpressions($impressions) {
			$this->impressions = (int) $impressions;
		}

		public function getImpressions() {
			return (int) $this->impressions;
		}


		public function setClicks($clicks) {
			$this->clicks = (int) $clicks;
		}

		public function getClicks() {
			return (int) $this->clicks;
		}


		public function setReach($reach) {
			$this->reach = (int) $reach;
		}

		public function getReach() {
			return (int) $this->reach;
		}


		public function setVideoViews($video_views) {
			$this->video_views = (int) $video_views;
		}

		public function getVideoViews() {
			return (int) $this->video_views;
		}


		public function setVideoViewsHalf($video_views_half) {
			$this->video_views_half = (int) $video_views_half;
		}

		public function getVideoViewsHalf() {
			return (int) $this->video_views_half;
		}


		public function setVideoViewsFull($video_views_full) {
			$this->video_views_full = (int) $video_views_full;
		}

		public function getVideoViewsFull() {
			return (int) $this->video_views_full;
		}


		public function setVideoClicksSite($video_clicks_site) {
			$this->video_clicks_site = (int) $video_clicks_site;
		}

		public function getVideoClicksSite() {
			return (int) $this->video_clicks_site;
		}


		public function setJoinRate($join_rate) {
			$this->join_rate = (int) $join_rate;
		}

		public function getJoinRate() {
			return (int) $this->join_rate;
		}




	}
?>