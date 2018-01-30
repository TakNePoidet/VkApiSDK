<?php

	namespace VkApiSDK\ApiTypes\Board;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetCommentsExtendedResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'count' 	 => true,
			'items' 	 => array(ApiTypes\Board\TopicComment::class),
			'poll' 	 => ApiTypes\Board\TopicPoll::class,
			'profiles' 	 => array(ApiTypes\Users\User::class),
			'groups' 	 => array(ApiTypes\Groups\Group::class),
		];


		protected $count;
		protected $items;
		protected $poll;
		protected $profiles;
		protected $groups;


		public function setCount($count) {
			$this->count = (int) $count;
		}

		public function getCount() {
			return (int) $this->count;
		}


		public function setItems($items) {
			$this->items = (array) $items;
		}

		public function getItems() {
			return (array) $this->items;
		}


		public function setPoll($poll) {
			$this->poll = $poll;
		}

		public function getPoll() {
			return $this->poll;
		}


		public function setProfiles($profiles) {
			$this->profiles = (array) $profiles;
		}

		public function getProfiles() {
			return (array) $this->profiles;
		}


		public function setGroups($groups) {
			$this->groups = (array) $groups;
		}

		public function getGroups() {
			return (array) $this->groups;
		}




	}
?>