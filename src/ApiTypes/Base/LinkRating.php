<?php

	namespace VkApiSDK\ApiTypes\Base;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class LinkRating extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'stars' 	 => true,
			'reviews_count' 	 => true,
		];


		protected $stars;
		protected $reviews_count;


		public function setStars($stars) {
			$this->stars = (int) $stars;
		}

		public function getStars() {
			return (int) $this->stars;
		}


		public function setReviewsCount($reviews_count) {
			$this->reviews_count = (int) $reviews_count;
		}

		public function getReviewsCount() {
			return (int) $this->reviews_count;
		}




	}
?>