<?php

	namespace VkApiSDK\ApiTypes\Groups;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class MemberStatusFull extends BaseType {

		protected static $requiredParams = ['member','user_id'];


		protected static $map = [
			'member' 	 => ApiTypes\Base\BoolInt::class,
			'user_id' 	 => true,
			'invitation' 	 => ApiTypes\Base\BoolInt::class,
			'request' 	 => ApiTypes\Base\BoolInt::class,
		];


		protected $member;
		protected $user_id;
		protected $invitation;
		protected $request;


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


		public function setInvitation($invitation) {
			$this->invitation = $invitation;
		}

		public function getInvitation() {
			return $this->invitation;
		}


		public function setRequest($request) {
			$this->request = $request;
		}

		public function getRequest() {
			return $this->request;
		}




	}
?>