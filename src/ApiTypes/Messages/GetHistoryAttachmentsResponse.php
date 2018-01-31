<?php

	namespace VkApiSDK\ApiTypes\Messages;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetHistoryAttachmentsResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'items' 	 => array(ApiTypes\Messages\HistoryAttachment::class),
			'next_from' 	 => true,
		];


		protected $items;
		protected $next_from;


		public function setItems($items) {
			$this->items = (array) $items;
		}

		public function getItems() {
			return (array) $this->items;
		}


		public function setNextFrom($next_from) {
			$this->next_from = $next_from;
		}

		public function getNextFrom() {
			return $this->next_from;
		}




	}
?>