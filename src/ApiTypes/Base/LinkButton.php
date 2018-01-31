<?php

	namespace VkApiSDK\ApiTypes\Base;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class LinkButton extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'title' 	 => true,
			'action' 	 => ApiTypes\Base\LinkButtonAction::class,
		];


		protected $title;
		protected $action;


		public function setTitle($title) {
			$this->title = $title;
		}

		public function getTitle() {
			return $this->title;
		}


		public function setAction($action) {
			$this->action = $action;
		}

		public function getAction() {
			return $this->action;
		}




	}
?>