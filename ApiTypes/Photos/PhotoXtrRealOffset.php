<?php

	namespace VkApiSDK\ApiTypes\Photos;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class PhotoXtrRealOffset extends BaseType {

		protected static $requiredParams = ['id','album_id','owner_id','date'];


		protected static $map = [
			'id' 	 => true,
			'album_id' 	 => true,
			'owner_id' 	 => true,
			'user_id' 	 => true,
			'sizes' 	 => array(ApiTypes\Photos\PhotoSizes::class),
			'photo_75' 	 => true,
			'photo_130' 	 => true,
			'photo_604' 	 => true,
			'photo_807' 	 => true,
			'photo_1280' 	 => true,
			'photo_2560' 	 => true,
			'post_id' 	 => true,
			'width' 	 => true,
			'height' 	 => true,
			'text' 	 => true,
			'date' 	 => true,
			'lat' 	 => true,
			'long' 	 => true,
			'access_key' 	 => true,
			'hidden' 	 => ApiTypes\Base\PropertyExists::class,
			'real_offset' 	 => true,
		];


		protected $id;
		protected $album_id;
		protected $owner_id;
		protected $user_id;
		protected $sizes;
		protected $photo_75;
		protected $photo_130;
		protected $photo_604;
		protected $photo_807;
		protected $photo_1280;
		protected $photo_2560;
		protected $post_id;
		protected $width;
		protected $height;
		protected $text;
		protected $date;
		protected $lat;
		protected $long;
		protected $access_key;
		protected $hidden;
		protected $real_offset;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setAlbumId($album_id) {
			$this->album_id = (int) $album_id;
		}

		public function getAlbumId() {
			return (int) $this->album_id;
		}


		public function setOwnerId($owner_id) {
			$this->owner_id = (int) $owner_id;
		}

		public function getOwnerId() {
			return (int) $this->owner_id;
		}


		public function setUserId($user_id) {
			$this->user_id = (int) $user_id;
		}

		public function getUserId() {
			return (int) $this->user_id;
		}


		public function setSizes($sizes) {
			$this->sizes = (array) $sizes;
		}

		public function getSizes() {
			return (array) $this->sizes;
		}


		public function setPhoto75($photo_75) {
			$this->photo_75 = $photo_75;
		}

		public function getPhoto75() {
			return $this->photo_75;
		}


		public function setPhoto130($photo_130) {
			$this->photo_130 = $photo_130;
		}

		public function getPhoto130() {
			return $this->photo_130;
		}


		public function setPhoto604($photo_604) {
			$this->photo_604 = $photo_604;
		}

		public function getPhoto604() {
			return $this->photo_604;
		}


		public function setPhoto807($photo_807) {
			$this->photo_807 = $photo_807;
		}

		public function getPhoto807() {
			return $this->photo_807;
		}


		public function setPhoto1280($photo_1280) {
			$this->photo_1280 = $photo_1280;
		}

		public function getPhoto1280() {
			return $this->photo_1280;
		}


		public function setPhoto2560($photo_2560) {
			$this->photo_2560 = $photo_2560;
		}

		public function getPhoto2560() {
			return $this->photo_2560;
		}


		public function setPostId($post_id) {
			$this->post_id = (int) $post_id;
		}

		public function getPostId() {
			return (int) $this->post_id;
		}


		public function setWidth($width) {
			$this->width = (int) $width;
		}

		public function getWidth() {
			return (int) $this->width;
		}


		public function setHeight($height) {
			$this->height = (int) $height;
		}

		public function getHeight() {
			return (int) $this->height;
		}


		public function setText($text) {
			$this->text = $text;
		}

		public function getText() {
			return $this->text;
		}


		public function setDate($date) {
			$this->date = (int) $date;
		}

		public function getDate() {
			return (int) $this->date;
		}


		public function setLat($lat) {
			$this->lat = (int) $lat;
		}

		public function getLat() {
			return (int) $this->lat;
		}


		public function setLong($long) {
			$this->long = (int) $long;
		}

		public function getLong() {
			return (int) $this->long;
		}


		public function setAccessKey($access_key) {
			$this->access_key = $access_key;
		}

		public function getAccessKey() {
			return $this->access_key;
		}


		public function setHidden($hidden) {
			$this->hidden = $hidden;
		}

		public function getHidden() {
			return $this->hidden;
		}


		public function setRealOffset($real_offset) {
			$this->real_offset = (int) $real_offset;
		}

		public function getRealOffset() {
			return (int) $this->real_offset;
		}




	}
?>