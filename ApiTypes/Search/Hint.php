<?php

	namespace VkApiSDK\ApiTypes\Search;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Hint extends BaseType {

		protected static $requiredParams = ['type','section','description'];


		protected static $map = [
			'type' 	 => true,
			'section' 	 => true,
			'description' 	 => true,
			'global' 	 => ApiTypes\Base\BoolInt::class,
			'group' 	 => ApiTypes\Groups\Group::class,
			'profile' 	 => ApiTypes\Users\UserMin::class,
		];


		protected $type;
		protected $section;
		protected $description;
		protected $global;
		protected $group;
		protected $profile;


		public function setType($type) {
			$this->type = $type;
		}

		public function getType() {
			return $this->type;
		}


		public function setSection($section) {
			$this->section = $section;
		}

		public function getSection() {
			return $this->section;
		}


		public function setDescription($description) {
			$this->description = $description;
		}

		public function getDescription() {
			return $this->description;
		}


		public function setGlobal($global) {
			$this->global = $global;
		}

		public function getGlobal() {
			return $this->global;
		}


		public function setGroup($group) {
			$this->group = $group;
		}

		public function getGroup() {
			return $this->group;
		}


		public function setProfile($profile) {
			$this->profile = $profile;
		}

		public function getProfile() {
			return $this->profile;
		}




	}
?>