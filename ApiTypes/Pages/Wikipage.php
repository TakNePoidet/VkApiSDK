<?php

	namespace VkApiSDK\ApiTypes\Pages;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class Wikipage extends BaseType {

		protected static $requiredParams = ['id','group_id','title','views','who_can_view','who_can_edit'];


		protected static $map = [
			'id' 	 => true,
			'group_id' 	 => true,
			'title' 	 => true,
			'who_can_view' 	 => ApiTypes\Pages\PrivacySettings::class,
			'who_can_edit' 	 => ApiTypes\Pages\PrivacySettings::class,
			'views' 	 => true,
			'editor_id' 	 => true,
			'editor_name' 	 => true,
			'creator_id' 	 => true,
			'creator_name' 	 => true,
		];


		protected $id;
		protected $group_id;
		protected $title;
		protected $who_can_view;
		protected $who_can_edit;
		protected $views;
		protected $editor_id;
		protected $editor_name;
		protected $creator_id;
		protected $creator_name;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setGroupId($group_id) {
			$this->group_id = (int) $group_id;
		}

		public function getGroupId() {
			return (int) $this->group_id;
		}


		public function setTitle($title) {
			$this->title = $title;
		}

		public function getTitle() {
			return $this->title;
		}


		public function setWhoCanView($who_can_view) {
			$this->who_can_view = $who_can_view;
		}

		public function getWhoCanView() {
			return $this->who_can_view;
		}


		public function setWhoCanEdit($who_can_edit) {
			$this->who_can_edit = $who_can_edit;
		}

		public function getWhoCanEdit() {
			return $this->who_can_edit;
		}


		public function setViews($views) {
			$this->views = (int) $views;
		}

		public function getViews() {
			return (int) $this->views;
		}


		public function setEditorId($editor_id) {
			$this->editor_id = (int) $editor_id;
		}

		public function getEditorId() {
			return (int) $this->editor_id;
		}


		public function setEditorName($editor_name) {
			$this->editor_name = $editor_name;
		}

		public function getEditorName() {
			return $this->editor_name;
		}


		public function setCreatorId($creator_id) {
			$this->creator_id = (int) $creator_id;
		}

		public function getCreatorId() {
			return (int) $this->creator_id;
		}


		public function setCreatorName($creator_name) {
			$this->creator_name = (int) $creator_name;
		}

		public function getCreatorName() {
			return (int) $this->creator_name;
		}




	}
?>