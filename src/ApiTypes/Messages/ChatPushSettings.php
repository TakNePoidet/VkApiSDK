<?php

	namespace VkApiSDK\ApiTypes\Messages;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class ChatPushSettings extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'sound' 	 => ApiTypes\Base\BoolInt::class,
			'disabled_until' 	 => true,
		];


		protected $sound;
		protected $disabled_until;


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