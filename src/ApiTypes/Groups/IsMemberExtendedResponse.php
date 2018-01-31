<?php

	namespace VkApiSDK\ApiTypes\Groups;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class IsMemberExtendedResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'member' 	 => ApiTypes\Base\BoolInt::class,
			'invitation' 	 => ApiTypes\Base\BoolInt::class,
			'request' 	 => ApiTypes\Base\BoolInt::class,
		];


		protected $member;
		protected $invitation;
		protected $request;


		public function setMember($member) {
			$this->member = $member;
		}

		public function getMember() {
			return $this->member;
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