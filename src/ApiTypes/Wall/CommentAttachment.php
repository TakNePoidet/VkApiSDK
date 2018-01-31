<?php

	namespace VkApiSDK\ApiTypes\Wall;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class CommentAttachment extends BaseType {

		protected static $requiredParams = ['type'];


		protected static $map = [
			'photo' 	 => ApiTypes\Photos\Photo::class,
			'audio' 	 => ApiTypes\Audio\AudioFull::class,
			'video' 	 => ApiTypes\Video\Video::class,
			'doc' 	 => ApiTypes\Docs\Doc::class,
			'link' 	 => ApiTypes\Base\Link::class,
			'note' 	 => ApiTypes\Wall\AttachedNote::class,
			'page' 	 => ApiTypes\Pages\WikipageFull::class,
			'market_market_album' 	 => ApiTypes\Market\MarketAlbum::class,
			'market' 	 => ApiTypes\Market\MarketItem::class,
			'sticker' 	 => ApiTypes\Base\Sticker::class,
			'type' 	 => true,
		];


		protected $photo;
		protected $audio;
		protected $video;
		protected $doc;
		protected $link;
		protected $note;
		protected $page;
		protected $market_market_album;
		protected $market;
		protected $sticker;
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


		public function setNote($note) {
			$this->note = $note;
		}

		public function getNote() {
			return $this->note;
		}


		public function setPage($page) {
			$this->page = $page;
		}

		public function getPage() {
			return $this->page;
		}


		public function setMarketMarketAlbum($market_market_album) {
			$this->market_market_album = $market_market_album;
		}

		public function getMarketMarketAlbum() {
			return $this->market_market_album;
		}


		public function setMarket($market) {
			$this->market = $market;
		}

		public function getMarket() {
			return $this->market;
		}


		public function setSticker($sticker) {
			$this->sticker = $sticker;
		}

		public function getSticker() {
			return $this->sticker;
		}


		public function setType($type) {
			$this->type = $type;
		}

		public function getType() {
			return $this->type;
		}




	}
?>