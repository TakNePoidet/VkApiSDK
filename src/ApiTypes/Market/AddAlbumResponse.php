<?php

	namespace VkApiSDK\ApiTypes\Market;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class AddAlbumResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'market_album_id' 	 => true,
		];


		protected $market_album_id;


		public function setMarketAlbumId($market_album_id) {
			$this->market_album_id = (int) $market_album_id;
		}

		public function getMarketAlbumId() {
			return (int) $this->market_album_id;
		}




	}
?>