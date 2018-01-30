<?php

	namespace VkApiSDK\ApiTypes\Account;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Offer extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'title' 	 => true,
			'instruction' 	 => true,
			'instruction_html' 	 => true,
			'short_description' 	 => true,
			'description' 	 => true,
			'img' 	 => true,
			'tag' 	 => true,
			'price' 	 => true,
		];


		protected $id;
		protected $title;
		protected $instruction;
		protected $instruction_html;
		protected $short_description;
		protected $description;
		protected $img;
		protected $tag;
		protected $price;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setTitle($title) {
			$this->title = $title;
		}

		public function getTitle() {
			return $this->title;
		}


		public function setInstruction($instruction) {
			$this->instruction = $instruction;
		}

		public function getInstruction() {
			return $this->instruction;
		}


		public function setInstructionHtml($instruction_html) {
			$this->instruction_html = $instruction_html;
		}

		public function getInstructionHtml() {
			return $this->instruction_html;
		}


		public function setShortDescription($short_description) {
			$this->short_description = $short_description;
		}

		public function getShortDescription() {
			return $this->short_description;
		}


		public function setDescription($description) {
			$this->description = $description;
		}

		public function getDescription() {
			return $this->description;
		}


		public function setImg($img) {
			$this->img = $img;
		}

		public function getImg() {
			return $this->img;
		}


		public function setTag($tag) {
			$this->tag = $tag;
		}

		public function getTag() {
			return $this->tag;
		}


		public function setPrice($price) {
			$this->price = (int) $price;
		}

		public function getPrice() {
			return (int) $this->price;
		}




	}
?>