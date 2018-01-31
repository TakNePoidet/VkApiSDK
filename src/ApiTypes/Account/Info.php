<?php

	namespace VkApiSDK\ApiTypes\Account;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Info extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'country' 	 => true,
			'https_required' 	 => ApiTypes\Base\BoolInt::class,
			'own_posts_default' 	 => ApiTypes\Base\BoolInt::class,
			'no_wall_replies' 	 => ApiTypes\Base\BoolInt::class,
			'intro' 	 => ApiTypes\Base\BoolInt::class,
			'lang' 	 => true,
			'_2fa_required' 	 => ApiTypes\Base\BoolInt::class,
		];


		protected $country;
		protected $https_required;
		protected $own_posts_default;
		protected $no_wall_replies;
		protected $intro;
		protected $lang;
		protected $_2fa_required;


		public function setCountry($country) {
			$this->country = $country;
		}

		public function getCountry() {
			return $this->country;
		}


		public function setHttpsRequired($https_required) {
			$this->https_required = $https_required;
		}

		public function getHttpsRequired() {
			return $this->https_required;
		}


		public function setOwnPostsDefault($own_posts_default) {
			$this->own_posts_default = $own_posts_default;
		}

		public function getOwnPostsDefault() {
			return $this->own_posts_default;
		}


		public function setNoWallReplies($no_wall_replies) {
			$this->no_wall_replies = $no_wall_replies;
		}

		public function getNoWallReplies() {
			return $this->no_wall_replies;
		}


		public function setIntro($intro) {
			$this->intro = $intro;
		}

		public function getIntro() {
			return $this->intro;
		}


		public function setLang($lang) {
			$this->lang = (int) $lang;
		}

		public function getLang() {
			return (int) $this->lang;
		}


		public function set2faRequired($_2fa_required) {
			$this->_2fa_required = $_2fa_required;
		}

		public function get2faRequired() {
			return $this->_2fa_required;
		}




	}
?>