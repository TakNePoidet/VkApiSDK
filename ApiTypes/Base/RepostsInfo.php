<?php

	namespace VkApiSDK\ApiTypes\Base;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class RepostsInfo extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'count' 	 => true,
			'user_reposted' 	 => true,
		];


		protected $count;
		protected $user_reposted;


		public function setCount($count) {
			$this->count = (int) $count;
		}

		public function getCount() {
			return (int) $this->count;
		}


		public function setUserReposted($user_reposted) {
			$this->user_reposted = (int) $user_reposted;
		}

		public function getUserReposted() {
			return (int) $this->user_reposted;
		}




	}
?>