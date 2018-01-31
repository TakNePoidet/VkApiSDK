<?php

	namespace VkApiSDK\ApiTypes\Video;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class CatElement extends BaseType {

		protected static $requiredParams = ['id','owner_id','title','type'];


		protected static $map = [
			'id' 	 => true,
			'owner_id' 	 => true,
			'title' 	 => true,
			'type' 	 => true,
			'description' 	 => true,
			'duration' 	 => true,
			'photo_130' 	 => true,
			'photo_160' 	 => true,
			'photo_320' 	 => true,
			'photo_640' 	 => true,
			'photo_800' 	 => true,
			'date' 	 => true,
			'views' 	 => true,
			'comments' 	 => true,
			'can_add' 	 => ApiTypes\Base\BoolInt::class,
			'can_edit' 	 => ApiTypes\Base\BoolInt::class,
			'is_private' 	 => ApiTypes\Base\BoolInt::class,
			'count' 	 => true,
			'updated_time' 	 => true,
		];


		protected $id;
		protected $owner_id;
		protected $title;
		protected $type;
		protected $description;
		protected $duration;
		protected $photo_130;
		protected $photo_160;
		protected $photo_320;
		protected $photo_640;
		protected $photo_800;
		protected $date;
		protected $views;
		protected $comments;
		protected $can_add;
		protected $can_edit;
		protected $is_private;
		protected $count;
		protected $updated_time;


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


		public function setType($type) {
			$this->type = $type;
		}

		public function getType() {
			return $this->type;
		}


		public function setDescription($description) {
			$this->description = $description;
		}

		public function getDescription() {
			return $this->description;
		}


		public function setDuration($duration) {
			$this->duration = (int) $duration;
		}

		public function getDuration() {
			return (int) $this->duration;
		}


		public function setPhoto130($photo_130) {
			$this->photo_130 = $photo_130;
		}

		public function getPhoto130() {
			return $this->photo_130;
		}


		public function setPhoto160($photo_160) {
			$this->photo_160 = $photo_160;
		}

		public function getPhoto160() {
			return $this->photo_160;
		}


		public function setPhoto320($photo_320) {
			$this->photo_320 = $photo_320;
		}

		public function getPhoto320() {
			return $this->photo_320;
		}


		public function setPhoto640($photo_640) {
			$this->photo_640 = $photo_640;
		}

		public function getPhoto640() {
			return $this->photo_640;
		}


		public function setPhoto800($photo_800) {
			$this->photo_800 = $photo_800;
		}

		public function getPhoto800() {
			return $this->photo_800;
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


		public function setCanAdd($can_add) {
			$this->can_add = $can_add;
		}

		public function getCanAdd() {
			return $this->can_add;
		}


		public function setCanEdit($can_edit) {
			$this->can_edit = $can_edit;
		}

		public function getCanEdit() {
			return $this->can_edit;
		}


		public function setIsPrivate($is_private) {
			$this->is_private = $is_private;
		}

		public function getIsPrivate() {
			return $this->is_private;
		}


		public function setCount($count) {
			$this->count = (int) $count;
		}

		public function getCount() {
			return (int) $this->count;
		}


		public function setUpdatedTime($updated_time) {
			$this->updated_time = (int) $updated_time;
		}

		public function getUpdatedTime() {
			return (int) $this->updated_time;
		}




	}
?>