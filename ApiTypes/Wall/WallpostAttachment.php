<?php

	namespace VkApiSDK\ApiTypes\Wall;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class WallpostAttachment extends BaseType {

		protected static $requiredParams = ['type'];


		protected static $map = [
			'photo' 	 => ApiTypes\Photos\Photo::class,
			'posted_photo' 	 => ApiTypes\Wall\PostedPhoto::class,
			'audio' 	 => ApiTypes\Audio\AudioFull::class,
			'video' 	 => ApiTypes\Video\Video::class,
			'doc' 	 => ApiTypes\Docs\Doc::class,
			'link' 	 => ApiTypes\Base\Link::class,
			'graffiti' 	 => ApiTypes\Wall\Graffiti::class,
			'note' 	 => ApiTypes\Wall\AttachedNote::class,
			'app' 	 => ApiTypes\Wall\AppPost::class,
			'poll' 	 => ApiTypes\Polls\Poll::class,
			'page' 	 => ApiTypes\Pages\WikipageFull::class,
			'album' 	 => ApiTypes\Photos\PhotoAlbum::class,
			'photos_list' 	 => true,
			'market_market_album' 	 => ApiTypes\Market\MarketAlbum::class,
			'market' 	 => ApiTypes\Market\MarketItem::class,
			'type' 	 => true,
		];


		protected $photo;
		protected $posted_photo;
		protected $audio;
		protected $video;
		protected $doc;
		protected $link;
		protected $graffiti;
		protected $note;
		protected $app;
		protected $poll;
		protected $page;
		protected $album;
		protected $photos_list;
		protected $market_market_album;
		protected $market;
		protected $type;


		public function setPhoto($photo) {
			$this->photo = $photo;
		}

		public function getPhoto() {
			return $this->photo;
		}


		public function setPostedPhoto($posted_photo) {
			$this->posted_photo = $posted_photo;
		}

		public function getPostedPhoto() {
			return $this->posted_photo;
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


		public function setGraffiti($graffiti) {
			$this->graffiti = $graffiti;
		}

		public function getGraffiti() {
			return $this->graffiti;
		}


		public function setNote($note) {
			$this->note = $note;
		}

		public function getNote() {
			return $this->note;
		}


		public function setApp($app) {
			$this->app = $app;
		}

		public function getApp() {
			return $this->app;
		}


		public function setPoll($poll) {
			$this->poll = $poll;
		}

		public function getPoll() {
			return $this->poll;
		}


		public function setPage($page) {
			$this->page = $page;
		}

		public function getPage() {
			return $this->page;
		}


		public function setAlbum($album) {
			$this->album = $album;
		}

		public function getAlbum() {
			return $this->album;
		}


		public function setPhotosList($photos_list) {
			$this->photos_list = (array) $photos_list;
		}

		public function getPhotosList() {
			return (array) $this->photos_list;
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


		public function setType($type) {
			$this->type = $type;
		}

		public function getType() {
			return $this->type;
		}




	}
?>