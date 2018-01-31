<?php

	namespace VkApiSDK\ApiTypes\Video;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class AddAlbumResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'album_id' 	 => true,
		];


		protected $album_id;


		public function setAlbumId($album_id) {
			$this->album_id = (int) $album_id;
		}

		public function getAlbumId() {
			return (int) $this->album_id;
		}




	}
?>