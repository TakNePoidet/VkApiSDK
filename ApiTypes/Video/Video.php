<?php

	namespace VkApiSDK\ApiTypes\Video;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Video extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'owner_id' 	 => true,
			'title' 	 => true,
			'duration' 	 => true,
			'description' 	 => true,
			'date' 	 => true,
			'views' 	 => true,
			'comments' 	 => true,
			'photo_130' 	 => true,
			'photo_320' 	 => true,
			'photo_800' 	 => true,
			'access_key' 	 => true,
			'adding_date' 	 => true,
			'player' 	 => true,
			'can_edit' 	 => ApiTypes\Base\BoolInt::class,
			'can_add' 	 => ApiTypes\Base\BoolInt::class,
			'processing' 	 => ApiTypes\Base\PropertyExists::class,
			'live' 	 => ApiTypes\Base\PropertyExists::class,
			'files' 	 => ApiTypes\Video\VideoFiles::class,
		];


		protected $id;
		protected $owner_id;
		protected $title;
		protected $duration;
		protected $description;
		protected $date;
		protected $views;
		protected $comments;
		protected $photo_130;
		protected $photo_320;
		protected $photo_800;
		protected $access_key;
		protected $adding_date;
		protected $player;
		protected $can_edit;
		protected $can_add;
		protected $processing;
		protected $live;
		protected $files;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setOwnerId($owner_id) {
			$this->owner_id = (int) $owner_id;
		}

		public function getOwnerId() {
			return (int) $this->owner_id;
		}


		public function setTitle($title) {
			$this->title = $title;
		}

		public function getTitle() {
			return $this->title;
		}


		public function setDuration($duration) {
			$this->duration = (int) $duration;
		}

		public function getDuration() {
			return (int) $this->duration;
		}


		public function setDescription($description) {
			$this->description = $description;
		}

		public function getDescription() {
			return $this->description;
		}


		public function setDate($date) {
			$this->date = (int) $date;
		}

		public function getDate() {
			return (int) $this->date;
		}


		public function setViews($views) {
			$this->views = (int) $views;
		}

		public function getViews() {
			return (int) $this->views;
		}


		public function setComments($comments) {
			$this->comments = (int) $comments;
		}

		public function getComments() {
			return (int) $this->comments;
		}


		public function setPhoto130($photo_130) {
			$this->photo_130 = $photo_130;
		}

		public function getPhoto130() {
			return $this->photo_130;
		}


		public function setPhoto320($photo_320) {
			$this->photo_320 = $photo_320;
		}

		public function getPhoto320() {
			return $this->photo_320;
		}


		public function setPhoto800($photo_800) {
			$this->photo_800 = $photo_800;
		}

		public function getPhoto800() {
			return $this->photo_800;
		}


		public function setAccessKey($access_key) {
			$this->access_key = $access_key;
		}

		public function getAccessKey() {
			return $this->access_key;
		}


		public function setAddingDate($adding_date) {
			$this->adding_date = (int) $adding_date;
		}

		public function getAddingDate() {
			return (int) $this->adding_date;
		}


		public function setPlayer($player) {
			$this->player = $player;
		}

		public function getPlayer() {
			return $this->player;
		}


		public function setCanEdit($can_edit) {
			$this->can_edit = $can_edit;
		}

		public function getCanEdit() {
			return $this->can_edit;
		}


		public function setCanAdd($can_add) {
			$this->can_add = $can_add;
		}

		public function getCanAdd() {
			return $this->can_add;
		}


		public function setProcessing($processing) {
			$this->processing = $processing;
		}

		public function getProcessing() {
			return $this->processing;
		}


		public function setLive($live) {
			$this->live = $live;
		}

		public function getLive() {
			return $this->live;
		}


		public function setFiles($files) {
			$this->files = $files;
		}

		public function getFiles() {
			return $this->files;
		}




	}
?>