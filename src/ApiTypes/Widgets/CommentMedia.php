<?php

	namespace VkApiSDK\ApiTypes\Widgets;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class CommentMedia extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'type' 	 => true,
			'owner_id' 	 => true,
			'item_id' 	 => true,
			'thumb_src' 	 => true,
		];


		protected $type;
		protected $owner_id;
		protected $item_id;
		protected $thumb_src;


		public function setType($type) {
			$this->type = $type;
		}

		public function getType() {
			return $this->type;
		}


		public function setOwnerId($owner_id) {
			$this->owner_id = (int) $owner_id;
		}

		public function getOwnerId() {
			return (int) $this->owner_id;
		}


		public function setItemId($item_id) {
			$this->item_id = (int) $item_id;
		}

		public function getItemId() {
			return (int) $this->item_id;
		}


		public function setThumbSrc($thumb_src) {
			$this->thumb_src = $thumb_src;
		}

		public function getThumbSrc() {
			return $this->thumb_src;
		}




	}
?>