<?php

	namespace VkApiSDK\ApiTypes\Market;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class MarketItem extends BaseType {

		protected static $requiredParams = ['id','owner_id','title','description','price','category','date','thumb_photo','availability'];


		protected static $map = [
			'id' 	 => true,
			'owner_id' 	 => true,
			'title' 	 => true,
			'description' 	 => true,
			'price' 	 => ApiTypes\Market\Price::class,
			'category' 	 => ApiTypes\Market\MarketCategory::class,
			'date' 	 => true,
			'thumb_photo' 	 => true,
			'availability' 	 => true,
		];


		protected $id;
		protected $owner_id;
		protected $title;
		protected $description;
		protected $price;
		protected $category;
		protected $date;
		protected $thumb_photo;
		protected $availability;


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


		public function setDescription($description) {
			$this->description = $description;
		}

		public function getDescription() {
			return $this->description;
		}


		public function setPrice($price) {
			$this->price = $price;
		}

		public function getPrice() {
			return $this->price;
		}


		public function setCategory($category) {
			$this->category = $category;
		}

		public function getCategory() {
			return $this->category;
		}


		public function setDate($date) {
			$this->date = (int) $date;
		}

		public function getDate() {
			return (int) $this->date;
		}


		public function setThumbPhoto($thumb_photo) {
			$this->thumb_photo = $thumb_photo;
		}

		public function getThumbPhoto() {
			return $this->thumb_photo;
		}


		public function setAvailability($availability) {
			$this->availability = (int) $availability;
		}

		public function getAvailability() {
			return (int) $this->availability;
		}




	}
?>