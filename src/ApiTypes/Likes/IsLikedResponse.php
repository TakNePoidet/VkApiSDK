<?php

	namespace VkApiSDK\ApiTypes\Likes;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class IsLikedResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'liked' 	 => ApiTypes\Base\BoolInt::class,
			'copied' 	 => ApiTypes\Base\BoolInt::class,
		];


		protected $liked;
		protected $copied;


		public function setLiked($liked) {
			$this->liked = $liked;
		}

		public function getLiked() {
			return $this->liked;
		}


		public function setCopied($copied) {
			$this->copied = $copied;
		}

		public function getCopied() {
			return $this->copied;
		}




	}
?>