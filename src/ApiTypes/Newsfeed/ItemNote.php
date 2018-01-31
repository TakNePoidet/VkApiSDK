<?php

	namespace VkApiSDK\ApiTypes\Newsfeed;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class ItemNote extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'notes' 	 => ApiTypes\Newsfeed\ItemNoteNotes::class,
		];


		protected $notes;


		public function setNotes($notes) {
			$this->notes = $notes;
		}

		public function getNotes() {
			return $this->notes;
		}




	}
?>