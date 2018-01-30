<?php

	namespace VkApiSDK\ApiTypes\Messages;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class MessageAttachment extends BaseType {

		protected static $requiredParams = ['type'];


		protected static $map = [
			'photo' 	 => ApiTypes\Photos\Photo::class,
			'audio' 	 => ApiTypes\Audio\AudioFull::class,
			'video' 	 => ApiTypes\Video\Video::class,
			'doc' 	 => ApiTypes\Docs\Doc::class,
			'link' 	 => ApiTypes\Base\Link::class,
			'market' 	 => ApiTypes\Market\MarketItem::class,
			'market_market_album' 	 => ApiTypes\Market\MarketAlbum::class,
			'gift' 	 => ApiTypes\Gifts\Layout::class,
			'sticker' 	 => ApiTypes\Base\Sticker::class,
			'wall' 	 => ApiTypes\Wall\WallpostAttached::class,
			'wall_reply' 	 => ApiTypes\Wall\WallComment::class,
			'type' 	 => true,
		];


		protected $photo;
		protected $audio;
		protected $video;
		protected $doc;
		protected $link;
		protected $market;
		protected $market_market_album;
		protected $gift;
		protected $sticker;
		protected $wall;
		protected $wall_reply;
		protected $type;


		public function setPhoto($photo) {
			$this->photo = $photo;
		}

		public function getPhoto() {
			return $this->photo;
		}


		public function setAudio($audio) {
			$this->audio = $audio;
		}

		public function getAudio() {
			return $this->audio;
		}


		public function setVideo($video) {
			$this->video = $video;
		}

		public function getVideo() {
			return $this->video;
		}


		public function setDoc($doc) {
			$this->doc = $doc;
		}

		public function getDoc() {
			return $this->doc;
		}


		public function setLink($link) {
			$this->link = $link;
		}

		public function getLink() {
			return $this->link;
		}


		public function setMarket($market) {
			$this->market = $market;
		}

		public function getMarket() {
			return $this->market;
		}


		public function setMarketMarketAlbum($market_market_album) {
			$this->market_market_album = $market_market_album;
		}

		public function getMarketMarketAlbum() {
			return $this->market_market_album;
		}


		public function setGift($gift) {
			$this->gift = $gift;
		}

		public function getGift() {
			return $this->gift;
		}


		public function setSticker($sticker) {
			$this->sticker = $sticker;
		}

		public function getSticker() {
			return $this->sticker;
		}


		public function setWall($wall) {
			$this->wall = $wall;
		}

		public function getWall() {
			return $this->wall;
		}


		public function setWallReply($wall_reply) {
			$this->wall_reply = $wall_reply;
		}

		public function getWallReply() {
			return $this->wall_reply;
		}


		public function setType($type) {
			$this->type = $type;
		}

		public function getType() {
			return $this->type;
		}




	}
?>