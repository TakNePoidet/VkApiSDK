<?php

	namespace VkApiSDK\ApiTypes\Widgets;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetCommentsResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'count' 	 => true,
			'posts' 	 => array(ApiTypes\Widgets\WidgetComment::class),
		];


		protected $count;
		protected $posts;


		public function setCount($count) {
			$this->count = (int) $count;
		}

		public function getCount() {
			return (int) $this->count;
		}


		public function setPosts($posts) {
			$this->posts = (array) $posts;
		}

		public function getPosts() {
			return (array) $this->posts;
		}




	}
?>