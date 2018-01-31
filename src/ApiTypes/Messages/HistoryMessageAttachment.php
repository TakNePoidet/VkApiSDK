<?php

	namespace VkApiSDK\ApiTypes\Messages;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class HistoryMessageAttachment extends BaseType {

		protected static $requiredParams = ['type'];


		protected static $map = [
			'type' 	 => true,
			'photo' 	 => ApiTypes\Photos\Photo::class,
			'video' 	 => ApiTypes\Video\Video::class,
			'audio' 	 => ApiTypes\Audio\AudioFull::class,
			'doc' 	 => ApiTypes\Docs\Doc::class,
			'link' 	 => ApiTypes\Base\Link::class,
			'market' 	 => ApiTypes\Base\Link::class,
			'wall' 	 => ApiTypes\Base\Link::class,
			'share' 	 => ApiTypes\Base\Link::class,
		];


		protected $type;
		protected $photo;
		protected $video;
		protected $audio;
		protected $doc;
		protected $link;
		protected $market;
		protected $wall;
		protected $share;


		public function setType($type) {
			$this->type = $type;
		}

		public function getType() {
			return $this->type;
		}


		public function setPhoto($photo) {
			$this->photo = $photo;
		}

		public function getPhoto() {
			return $this->photo;
		}


		public function setVideo($video) {
			$this->video = $video;
		}

		public function getVideo() {
			return $this->video;
		}


		public function setAudio($audio) {
			$this->audio = $audio;
		}

		public function getAudio() {
			return $this->audio;
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


		public function setWall($wall) {
			$this->wall = $wall;
		}

		public function getWall() {
			return $this->wall;
		}


		public function setShare($share) {
			$this->share = $share;
		}

		public function getShare() {
			return $this->share;
		}




	}
?>