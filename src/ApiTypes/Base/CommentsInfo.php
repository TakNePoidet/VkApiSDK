<?php

	namespace VkApiSDK\ApiTypes\Base;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class CommentsInfo extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'count' 	 => true,
			'can_post' 	 => ApiTypes\Base\BoolInt::class,
			'groups_can_post' 	 => ApiTypes\Base\BoolInt::class,
		];


		protected $count;
		protected $can_post;
		protected $groups_can_post;


		public function setCount($count) {
			$this->count = (int) $count;
		}

		public function getCount() {
			return (int) $this->count;
		}


		public function setCanPost($can_post) {
			$this->can_post = $can_post;
		}

		public function getCanPost() {
			return $this->can_post;
		}


		public function setGroupsCanPost($groups_can_post) {
			$this->groups_can_post = $groups_can_post;
		}

		public function getGroupsCanPost() {
			return $this->groups_can_post;
		}




	}
?>