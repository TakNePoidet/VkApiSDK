<?php

	namespace VkApiSDK\ApiTypes\Account;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class PushConversationsItem extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'peer_id' 	 => true,
			'sound' 	 => ApiTypes\Base\BoolInt::class,
			'disabled_until' 	 => true,
		];


		protected $peer_id;
		protected $sound;
		protected $disabled_until;


		public function setPeerId($peer_id) {
			$this->peer_id = (int) $peer_id;
		}

		public function getPeerId() {
			return (int) $this->peer_id;
		}


		public function setSound($sound) {
			$this->sound = $sound;
		}

		public function getSound() {
			return $this->sound;
		}


		public function setDisabledUntil($disabled_until) {
			$this->disabled_until = (int) $disabled_until;
		}

		public function getDisabledUntil() {
			return (int) $this->disabled_until;
		}




	}
?>