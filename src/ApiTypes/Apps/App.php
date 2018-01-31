<?php

	namespace VkApiSDK\ApiTypes\Apps;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class App extends BaseType {

		protected static $requiredParams = ['id','title','type'];


		protected static $map = [
			'id' 	 => true,
			'title' 	 => true,
			'screen_name' 	 => true,
			'description' 	 => true,
			'icon_278' 	 => true,
			'icon_150' 	 => true,
			'icon_139' 	 => true,
			'icon_75' 	 => true,
			'banner_560' 	 => true,
			'banner_1120' 	 => true,
			'type' 	 => true,
			'section' 	 => true,
			'author_url' 	 => true,
			'author_id' 	 => true,
			'author_group' 	 => true,
			'members_count' 	 => true,
			'published_date' 	 => true,
			'catalog_position' 	 => true,
			'screenshots' 	 => array(ApiTypes\Photos\Photo::class),
			'international' 	 => true,
			'leaderboard_type' 	 => true,
			'genre_id' 	 => true,
			'genre' 	 => true,
			'platform_id' 	 => true,
			'is_in_catalog' 	 => true,
		];


		protected $id;
		protected $title;
		protected $screen_name;
		protected $description;
		protected $icon_278;
		protected $icon_150;
		protected $icon_139;
		protected $icon_75;
		protected $banner_560;
		protected $banner_1120;
		protected $type;
		protected $section;
		protected $author_url;
		protected $author_id;
		protected $author_group;
		protected $members_count;
		protected $published_date;
		protected $catalog_position;
		protected $screenshots;
		protected $international;
		protected $leaderboard_type;
		protected $genre_id;
		protected $genre;
		protected $platform_id;
		protected $is_in_catalog;


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


		public function setScreenName($screen_name) {
			$this->screen_name = $screen_name;
		}

		public function getScreenName() {
			return $this->screen_name;
		}


		public function setDescription($description) {
			$this->description = $description;
		}

		public function getDescription() {
			return $this->description;
		}


		public function setIcon278($icon_278) {
			$this->icon_278 = $icon_278;
		}

		public function getIcon278() {
			return $this->icon_278;
		}


		public function setIcon150($icon_150) {
			$this->icon_150 = $icon_150;
		}

		public function getIcon150() {
			return $this->icon_150;
		}


		public function setIcon139($icon_139) {
			$this->icon_139 = $icon_139;
		}

		public function getIcon139() {
			return $this->icon_139;
		}


		public function setIcon75($icon_75) {
			$this->icon_75 = $icon_75;
		}

		public function getIcon75() {
			return $this->icon_75;
		}


		public function setBanner560($banner_560) {
			$this->banner_560 = $banner_560;
		}

		public function getBanner560() {
			return $this->banner_560;
		}


		public function setBanner1120($banner_1120) {
			$this->banner_1120 = $banner_1120;
		}

		public function getBanner1120() {
			return $this->banner_1120;
		}


		public function setType($type) {
			$this->type = $type;
		}

		public function getType() {
			return $this->type;
		}


		public function setSection($section) {
			$this->section = $section;
		}

		public function getSection() {
			return $this->section;
		}


		public function setAuthorUrl($author_url) {
			$this->author_url = $author_url;
		}

		public function getAuthorUrl() {
			return $this->author_url;
		}


		public function setAuthorId($author_id) {
			$this->author_id = (int) $author_id;
		}

		public function getAuthorId() {
			return (int) $this->author_id;
		}


		public function setAuthorGroup($author_group) {
			$this->author_group = (int) $author_group;
		}

		public function getAuthorGroup() {
			return (int) $this->author_group;
		}


		public function setMembersCount($members_count) {
			$this->members_count = (int) $members_count;
		}

		public function getMembersCount() {
			return (int) $this->members_count;
		}


		public function setPublishedDate($published_date) {
			$this->published_date = (int) $published_date;
		}

		public function getPublishedDate() {
			return (int) $this->published_date;
		}


		public function setCatalogPosition($catalog_position) {
			$this->catalog_position = (int) $catalog_position;
		}

		public function getCatalogPosition() {
			return (int) $this->catalog_position;
		}


		public function setScreenshots($screenshots) {
			$this->screenshots = (array) $screenshots;
		}

		public function getScreenshots() {
			return (array) $this->screenshots;
		}


		public function setInternational($international) {
			$this->international = (int) $international;
		}

		public function getInternational() {
			return (int) $this->international;
		}


		public function setLeaderboardType($leaderboard_type) {
			$this->leaderboard_type = (int) $leaderboard_type;
		}

		public function getLeaderboardType() {
			return (int) $this->leaderboard_type;
		}


		public function setGenreId($genre_id) {
			$this->genre_id = (int) $genre_id;
		}

		public function getGenreId() {
			return (int) $this->genre_id;
		}


		public function setGenre($genre) {
			$this->genre = $genre;
		}

		public function getGenre() {
			return $this->genre;
		}


		public function setPlatformId($platform_id) {
			$this->platform_id = (int) $platform_id;
		}

		public function getPlatformId() {
			return (int) $this->platform_id;
		}


		public function setIsInCatalog($is_in_catalog) {
			$this->is_in_catalog = (int) $is_in_catalog;
		}

		public function getIsInCatalog() {
			return (int) $this->is_in_catalog;
		}




	}
?>