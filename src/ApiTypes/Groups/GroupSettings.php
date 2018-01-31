<?php

	namespace VkApiSDK\ApiTypes\Groups;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GroupSettings extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'title' 	 => true,
			'description' 	 => true,
			'address' 	 => true,
			'place' 	 => ApiTypes\Places\PlaceMin::class,
			'wall' 	 => true,
			'photos' 	 => true,
			'video' 	 => true,
			'audio' 	 => true,
			'docs' 	 => true,
			'topics' 	 => true,
			'wiki' 	 => true,
			'obscene_filter' 	 => ApiTypes\Base\BoolInt::class,
			'obscene_stopwords' 	 => ApiTypes\Base\BoolInt::class,
			'obscene_words' 	 => true,
			'access' 	 => true,
			'subject' 	 => true,
			'subject_list' 	 => array(ApiTypes\Groups\SubjectItem::class),
			'rss' 	 => true,
			'website' 	 => true,
		];


		protected $title;
		protected $description;
		protected $address;
		protected $place;
		protected $wall;
		protected $photos;
		protected $video;
		protected $audio;
		protected $docs;
		protected $topics;
		protected $wiki;
		protected $obscene_filter;
		protected $obscene_stopwords;
		protected $obscene_words;
		protected $access;
		protected $subject;
		protected $subject_list;
		protected $rss;
		protected $website;


		public function setTitle($title) {
			$this->title = $title;
		}

		public function getTitle() {
			return $this->title;
		}


		public function setDescription($description) {
			$this->description = $description;
		}

		public function getDescription() {
			return $this->description;
		}


		public function setAddress($address) {
			$this->address = $address;
		}

		public function getAddress() {
			return $this->address;
		}


		public function setPlace($place) {
			$this->place = $place;
		}

		public function getPlace() {
			return $this->place;
		}


		public function setWall($wall) {
			$this->wall = (int) $wall;
		}

		public function getWall() {
			return (int) $this->wall;
		}


		public function setPhotos($photos) {
			$this->photos = (int) $photos;
		}

		public function getPhotos() {
			return (int) $this->photos;
		}


		public function setVideo($video) {
			$this->video = (int) $video;
		}

		public function getVideo() {
			return (int) $this->video;
		}


		public function setAudio($audio) {
			$this->audio = (int) $audio;
		}

		public function getAudio() {
			return (int) $this->audio;
		}


		public function setDocs($docs) {
			$this->docs = (int) $docs;
		}

		public function getDocs() {
			return (int) $this->docs;
		}


		public function setTopics($topics) {
			$this->topics = (int) $topics;
		}

		public function getTopics() {
			return (int) $this->topics;
		}


		public function setWiki($wiki) {
			$this->wiki = (int) $wiki;
		}

		public function getWiki() {
			return (int) $this->wiki;
		}


		public function setObsceneFilter($obscene_filter) {
			$this->obscene_filter = $obscene_filter;
		}

		public function getObsceneFilter() {
			return $this->obscene_filter;
		}


		public function setObsceneStopwords($obscene_stopwords) {
			$this->obscene_stopwords = $obscene_stopwords;
		}

		public function getObsceneStopwords() {
			return $this->obscene_stopwords;
		}


		public function setObsceneWords($obscene_words) {
			$this->obscene_words = $obscene_words;
		}

		public function getObsceneWords() {
			return $this->obscene_words;
		}


		public function setAccess($access) {
			$this->access = (int) $access;
		}

		public function getAccess() {
			return (int) $this->access;
		}


		public function setSubject($subject) {
			$this->subject = (int) $subject;
		}

		public function getSubject() {
			return (int) $this->subject;
		}


		public function setSubjectList($subject_list) {
			$this->subject_list = (array) $subject_list;
		}

		public function getSubjectList() {
			return (array) $this->subject_list;
		}


		public function setRss($rss) {
			$this->rss = $rss;
		}

		public function getRss() {
			return $this->rss;
		}


		public function setWebsite($website) {
			$this->website = $website;
		}

		public function getWebsite() {
			return $this->website;
		}




	}
?>