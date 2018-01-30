<?php

	namespace VkApiSDK\ApiTypes\Pages;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class WikipageFull extends BaseType {

		protected static $requiredParams = ['id','group_id','title','edited','created','views','view_url','who_can_view','who_can_edit'];


		protected static $map = [
			'id' 	 => true,
			'group_id' 	 => true,
			'title' 	 => true,
			'current_user_can_edit' 	 => ApiTypes\Base\BoolInt::class,
			'current_user_can_edit_access' 	 => ApiTypes\Base\BoolInt::class,
			'who_can_view' 	 => ApiTypes\Pages\PrivacySettings::class,
			'who_can_edit' 	 => ApiTypes\Pages\PrivacySettings::class,
			'edited' 	 => true,
			'created' 	 => true,
			'views' 	 => true,
			'editor_id' 	 => true,
			'creator_id' 	 => true,
			'source' 	 => true,
			'html' 	 => true,
			'view_url' 	 => true,
		];


		protected $id;
		protected $group_id;
		protected $title;
		protected $current_user_can_edit;
		protected $current_user_can_edit_access;
		protected $who_can_view;
		protected $who_can_edit;
		protected $edited;
		protected $created;
		protected $views;
		protected $editor_id;
		protected $creator_id;
		protected $source;
		protected $html;
		protected $view_url;


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


		public function setCurrentUserCanEdit($current_user_can_edit) {
			$this->current_user_can_edit = $current_user_can_edit;
		}

		public function getCurrentUserCanEdit() {
			return $this->current_user_can_edit;
		}


		public function setCurrentUserCanEditAccess($current_user_can_edit_access) {
			$this->current_user_can_edit_access = $current_user_can_edit_access;
		}

		public function getCurrentUserCanEditAccess() {
			return $this->current_user_can_edit_access;
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


		public function setEdited($edited) {
			$this->edited = (int) $edited;
		}

		public function getEdited() {
			return (int) $this->edited;
		}


		public function setCreated($created) {
			$this->created = (int) $created;
		}

		public function getCreated() {
			return (int) $this->created;
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


		public function setCreatorId($creator_id) {
			$this->creator_id = (int) $creator_id;
		}

		public function getCreatorId() {
			return (int) $this->creator_id;
		}


		public function setSource($source) {
			$this->source = $source;
		}

		public function getSource() {
			return $this->source;
		}


		public function setHtml($html) {
			$this->html = $html;
		}

		public function getHtml() {
			return $this->html;
		}


		public function setViewUrl($view_url) {
			$this->view_url = $view_url;
		}

		public function getViewUrl() {
			return $this->view_url;
		}




	}
?>