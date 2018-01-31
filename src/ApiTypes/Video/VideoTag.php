<?php

	namespace VkApiSDK\ApiTypes\Video;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class VideoTag extends BaseType {

		protected static $requiredParams = ['user_id','id','tagged_name','placer_id','date','viewed'];


		protected static $map = [
			'user_id' 	 => true,
			'id' 	 => true,
			'placer_id' 	 => true,
			'tagged_name' 	 => true,
			'date' 	 => true,
			'viewed' 	 => ApiTypes\Base\BoolInt::class,
		];


		protected $user_id;
		protected $id;
		protected $placer_id;
		protected $tagged_name;
		protected $date;
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


		public function setViewed($viewed) {
			$this->viewed = $viewed;
		}

		public function getViewed() {
			return $this->viewed;
		}




	}
?>