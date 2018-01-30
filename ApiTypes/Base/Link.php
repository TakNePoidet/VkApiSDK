<?php

	namespace VkApiSDK\ApiTypes\Base;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Link extends BaseType {

		protected static $requiredParams = ['url'];


		protected static $map = [
			'url' 	 => true,
			'title' 	 => true,
			'caption' 	 => true,
			'description' 	 => true,
			'photo' 	 => ApiTypes\Photos\Photo::class,
			'preview_url' 	 => true,
			'preview_page' 	 => true,
			'button' 	 => ApiTypes\Base\LinkButton::class,
			'product' 	 => ApiTypes\Base\LinkProduct::class,
			'rating' 	 => ApiTypes\Base\LinkRating::class,
			'application' 	 => ApiTypes\Base\LinkApplication::class,
		];


		protected $url;
		protected $title;
		protected $caption;
		protected $description;
		protected $photo;
		protected $preview_url;
		protected $preview_page;
		protected $button;
		protected $product;
		protected $rating;
		protected $application;


		public function setUrl($url) {
			$this->url = $url;
		}

		public function getUrl() {
			return $this->url;
		}


		public function setTitle($title) {
			$this->title = $title;
		}

		public function getTitle() {
			return $this->title;
		}


		public function setCaption($caption) {
			$this->caption = $caption;
		}

		public function getCaption() {
			return $this->caption;
		}


		public function setDescription($description) {
			$this->description = $description;
		}

		public function getDescription() {
			return $this->description;
		}


		public function setPhoto($photo) {
			$this->photo = $photo;
		}

		public function getPhoto() {
			return $this->photo;
		}


		public function setPreviewUrl($preview_url) {
			$this->preview_url = $preview_url;
		}

		public function getPreviewUrl() {
			return $this->preview_url;
		}


		public function setPreviewPage($preview_page) {
			$this->preview_page = $preview_page;
		}

		public function getPreviewPage() {
			return $this->preview_page;
		}


		public function setButton($button) {
			$this->button = $button;
		}

		public function getButton() {
			return $this->button;
		}


		public function setProduct($product) {
			$this->product = $product;
		}

		public function getProduct() {
			return $this->product;
		}


		public function setRating($rating) {
			$this->rating = $rating;
		}

		public function getRating() {
			return $this->rating;
		}


		public function setApplication($application) {
			$this->application = $application;
		}

		public function getApplication() {
			return $this->application;
		}




	}
?>