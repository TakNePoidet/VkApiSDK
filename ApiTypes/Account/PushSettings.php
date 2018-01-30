<?php

	namespace VkApiSDK\ApiTypes\Account;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class PushSettings extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'disabled' 	 => ApiTypes\Base\BoolInt::class,
			'disabled_until' 	 => true,
			'conversations' 	 => ApiTypes\Account\PushConversations::class,
			'settings' 	 => ApiTypes\Account\PushParams::class,
		];


		protected $disabled;
		protected $disabled_until;
		protected $conversations;
		protected $settings;


		public function setDisabled($disabled) {
			$this->disabled = $disabled;
		}

		public function getDisabled() {
			return $this->disabled;
		}


		public function setDisabledUntil($disabled_until) {
			$this->disabled_until = (int) $disabled_until;
		}

		public function getDisabledUntil() {
			return (int) $this->disabled_until;
		}


		public function setConversations($conversations) {
			$this->conversations = $conversations;
		}

		public function getConversations() {
			return $this->conversations;
		}


		public function setSettings($settings) {
			$this->settings = $settings;
		}

		public function getSettings() {
			return $this->settings;
		}




	}
?>