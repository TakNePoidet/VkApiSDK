<?php

	namespace VkApiSDK\ApiTypes\Photos;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class PhotoTag extends BaseType {

		protected static $requiredParams = ['user_id','id','tagged_name','placer_id','date','x','y','x2','y2','viewed'];


		protected static $map = [
			'user_id' 	 => true,
			'id' 	 => true,
			'placer_id' 	 => true,
			'tagged_name' 	 => true,
			'date' 	 => true,
			'x' 	 => true,
			'y' 	 => true,
			'x2' 	 => true,
			'y2' 	 => true,
			'viewed' 	 => ApiTypes\Base\BoolInt::class,
		];


		protected $user_id;
		protected $id;
		protected $placer_id;
		protected $tagged_name;
		protected $date;
		protected $x;
		protected $y;
		protected $x2;
		protected $y2;
		protected $viewed;


		public function setUserId($user_id) {
			$this->user_id = (int) $user_id;
		}

		public function getUserId() {
			return (int) $this->user_id;
		}


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setPlacerId($placer_id) {
			$this->placer_id = (int) $placer_id;
		}

		public function getPlacerId() {
			return (int) $this->placer_id;
		}


		public function setTaggedName($tagged_name) {
			$this->tagged_name = $tagged_name;
		}

		public function getTaggedName() {
			return $this->tagged_name;
		}


		public function setDate($date) {
			$this->date = (int) $date;
		}

		public function getDate() {
			return (int) $this->date;
		}


		public function setX($x) {
			$this->x = (int) $x;
		}

		public function getX() {
			return (int) $this->x;
		}


		public function setY($y) {
			$this->y = (int) $y;
		}

		public function getY() {
			return (int) $this->y;
		}


		public function setX2($x2) {
			$this->x2 = (int) $x2;
		}

		public function getX2() {
			return (int) $this->x2;
		}


		public function setY2($y2) {
			$this->y2 = (int) $y2;
		}

		public function getY2() {
			return (int) $this->y2;
		}


		public function setViewed($viewed) {
			$this->viewed = $viewed;
		}

		public function getViewed() {
			return $this->viewed;
		}




	}
?>