<?php

	namespace VkApiSDK\ApiTypes\Newsfeed;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetBannedResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'groups' 	 => true,
			'members' 	 => true,
		];


		protected $groups;
		protected $members;


		public function setGroups($groups) {
			$this->groups = (array) $groups;
		}

		public function getGroups() {
			return (array) $this->groups;
		}


		public function setMembers($members) {
			$this->members = (array) $members;
		}

		public function getMembers() {
			return (array) $this->members;
		}




	}
?>