<?php

	namespace VkApiSDK\ApiTypes\Groups;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class MemberStatus extends BaseType {

		protected static $requiredParams = ['member','user_id'];


		protected static $map = [
			'member' 	 => ApiTypes\Base\BoolInt::class,
			'user_id' 	 => true,
		];


		protected $member;
		protected $user_id;


		public function setMember($member) {
			$this->member = $member;
		}

		public function getMember() {
			return $this->member;
		}


		public function setUserId($user_id) {
			$this->user_id = (int) $user_id;
		}

		public function getUserId() {
			return (int) $this->user_id;
		}




	}
?>