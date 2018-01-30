<?php

	namespace VkApiSDK\ApiTypes\Pages;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class WikipageVersion extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'length' 	 => true,
			'edited' 	 => true,
			'editor_id' 	 => true,
			'editor_name' 	 => true,
		];


		protected $id;
		protected $length;
		protected $edited;
		protected $editor_id;
		protected $editor_name;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setLength($length) {
			$this->length = (int) $length;
		}

		public function getLength() {
			return (int) $this->length;
		}


		public function setEdited($edited) {
			$this->edited = (int) $edited;
		}

		public function getEdited() {
			return (int) $this->edited;
		}


		public function setEditorId($editor_id) {
			$this->editor_id = (int) $editor_id;
		}

		public function getEditorId() {
			return (int) $this->editor_id;
		}


		public function setEditorName($editor_name) {
			$this->editor_name = $editor_name;
		}

		public function getEditorName() {
			return $this->editor_name;
		}




	}
?>