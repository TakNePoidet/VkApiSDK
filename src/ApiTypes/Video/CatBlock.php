<?php

	namespace VkApiSDK\ApiTypes\Video;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class CatBlock extends BaseType {

		protected static $requiredParams = ['items','next','name','id','view','can_hide'];


		protected static $map = [
			'items' 	 => array(ApiTypes\Video\CatElement::class),
			'next' 	 => true,
			'name' 	 => true,
			'id' 	 => true,
			'view' 	 => true,
			'can_hide' 	 => ApiTypes\Base\BoolInt::class,
			'type' 	 => true,
		];


		protected $items;
		protected $next;
		protected $name;
		protected $id;
		protected $view;
		protected $can_hide;
		protected $type;


		public function setItems($items) {
			$this->items = (array) $items;
		}

		public function getItems() {
			return (array) $this->items;
		}


		public function setNext($next) {
			$this->next = $next;
		}

		public function getNext() {
			return $this->next;
		}


		public function setName($name) {
			$this->name = $name;
		}

		public function getName() {
			return $this->name;
		}


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setView($view) {
			$this->view = $view;
		}

		public function getView() {
			return $this->view;
		}


		public function setCanHide($can_hide) {
			$this->can_hide = $can_hide;
		}

		public function getCanHide() {
			return $this->can_hide;
		}


		public function setType($type) {
			$this->type = $type;
		}

		public function getType() {
			return $this->type;
		}




	}
?>