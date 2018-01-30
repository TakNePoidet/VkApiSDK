<?php

	namespace VkApiSDK\ApiTypes\Docs;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Doc extends BaseType {

		protected static $requiredParams = ['id','owner_id','title','size','ext','date','type'];


		protected static $map = [
			'id' 	 => true,
			'owner_id' 	 => true,
			'title' 	 => true,
			'size' 	 => true,
			'ext' 	 => true,
			'url' 	 => true,
			'date' 	 => true,
			'type' 	 => true,
			'preview' 	 => ApiTypes\Docs\DocPreview::class,
			'access_key' 	 => true,
		];


		protected $id;
		protected $owner_id;
		protected $title;
		protected $size;
		protected $ext;
		protected $url;
		protected $date;
		protected $type;
		protected $preview;
		protected $access_key;


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


		public function setSize($size) {
			$this->size = (int) $size;
		}

		public function getSize() {
			return (int) $this->size;
		}


		public function setExt($ext) {
			$this->ext = $ext;
		}

		public function getExt() {
			return $this->ext;
		}


		public function setUrl($url) {
			$this->url = $url;
		}

		public function getUrl() {
			return $this->url;
		}


		public function setDate($date) {
			$this->date = (int) $date;
		}

		public function getDate() {
			return (int) $this->date;
		}


		public function setType($type) {
			$this->type = (int) $type;
		}

		public function getType() {
			return (int) $this->type;
		}


		public function setPreview($preview) {
			$this->preview = $preview;
		}

		public function getPreview() {
			return $this->preview;
		}


		public function setAccessKey($access_key) {
			$this->access_key = $access_key;
		}

		public function getAccessKey() {
			return $this->access_key;
		}




	}
?>