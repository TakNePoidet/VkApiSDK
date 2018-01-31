<?php

	namespace VkApiSDK\ApiTypes\Database;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class City extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'title' 	 => true,
			'area' 	 => true,
			'region' 	 => true,
			'important' 	 => ApiTypes\Base\BoolInt::class,
		];


		protected $id;
		protected $title;
		protected $area;
		protected $region;
		protected $important;


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


		public function setArea($area) {
			$this->area = $area;
		}

		public function getArea() {
			return $this->area;
		}


		public function setRegion($region) {
			$this->region = $region;
		}

		public function getRegion() {
			return $this->region;
		}


		public function setImportant($important) {
			$this->important = $important;
		}

		public function getImportant() {
			return $this->important;
		}




	}
?>