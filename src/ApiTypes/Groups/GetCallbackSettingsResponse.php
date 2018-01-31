<?php

	namespace VkApiSDK\ApiTypes\Groups;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GetCallbackSettingsResponse extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'message_new' 	 => ApiTypes\Base\BoolInt::class,
			'message_reply' 	 => ApiTypes\Base\BoolInt::class,
			'message_allow' 	 => ApiTypes\Base\BoolInt::class,
			'message_deny' 	 => ApiTypes\Base\BoolInt::class,
			'photo_new' 	 => ApiTypes\Base\BoolInt::class,
			'audio_new' 	 => ApiTypes\Base\BoolInt::class,
			'video_new' 	 => ApiTypes\Base\BoolInt::class,
			'wall_reply_new' 	 => ApiTypes\Base\BoolInt::class,
			'wall_reply_edit' 	 => ApiTypes\Base\BoolInt::class,
			'wall_reply_delete' 	 => ApiTypes\Base\BoolInt::class,
			'wall_post_restore' 	 => ApiTypes\Base\BoolInt::class,
			'board_post_new' 	 => ApiTypes\Base\BoolInt::class,
			'board_post_edit' 	 => ApiTypes\Base\BoolInt::class,
			'board_post_restore' 	 => ApiTypes\Base\BoolInt::class,
			'board_post_delete' 	 => ApiTypes\Base\BoolInt::class,
			'photo_comment_new' 	 => ApiTypes\Base\BoolInt::class,
			'photo_comment_edit' 	 => ApiTypes\Base\BoolInt::class,
			'photo_comment_delete' 	 => ApiTypes\Base\BoolInt::class,
			'photo_comment_restore' 	 => ApiTypes\Base\BoolInt::class,
			'video_comment_new' 	 => ApiTypes\Base\BoolInt::class,
			'video_comment_edit' 	 => ApiTypes\Base\BoolInt::class,
			'video_comment_delete' 	 => ApiTypes\Base\BoolInt::class,
			'video_comment_restore' 	 => ApiTypes\Base\BoolInt::class,
			'market_comment_new' 	 => ApiTypes\Base\BoolInt::class,
			'market_comment_edit' 	 => ApiTypes\Base\BoolInt::class,
			'market_comment_delete' 	 => ApiTypes\Base\BoolInt::class,
			'market_comment_restore' 	 => ApiTypes\Base\BoolInt::class,
			'group_join' 	 => ApiTypes\Base\BoolInt::class,
			'group_leave' 	 => ApiTypes\Base\BoolInt::class,
		];


		protected $message_new;
		protected $message_reply;
		protected $message_allow;
		protected $message_deny;
		protected $photo_new;
		protected $audio_new;
		protected $video_new;
		protected $wall_reply_new;
		protected $wall_reply_edit;
		protected $wall_reply_delete;
		protected $wall_post_restore;
		protected $board_post_new;
		protected $board_post_edit;
		protected $board_post_restore;
		protected $board_post_delete;
		protected $photo_comment_new;
		protected $photo_comment_edit;
		protected $photo_comment_delete;
		protected $photo_comment_restore;
		protected $video_comment_new;
		protected $video_comment_edit;
		protected $video_comment_delete;
		protected $video_comment_restore;
		protected $market_comment_new;
		protected $market_comment_edit;
		protected $market_comment_delete;
		protected $market_comment_restore;
		protected $group_join;
		protected $group_leave;


		public function setMessageNew($message_new) {
			$this->message_new = $message_new;
		}

		public function getMessageNew() {
			return $this->message_new;
		}


		public function setMessageReply($message_reply) {
			$this->message_reply = $message_reply;
		}

		public function getMessageReply() {
			return $this->message_reply;
		}


		public function setMessageAllow($message_allow) {
			$this->message_allow = $message_allow;
		}

		public function getMessageAllow() {
			return $this->message_allow;
		}


		public function setMessageDeny($message_deny) {
			$this->message_deny = $message_deny;
		}

		public function getMessageDeny() {
			return $this->message_deny;
		}


		public function setPhotoNew($photo_new) {
			$this->photo_new = $photo_new;
		}

		public function getPhotoNew() {
			return $this->photo_new;
		}


		public function setAudioNew($audio_new) {
			$this->audio_new = $audio_new;
		}

		public function getAudioNew() {
			return $this->audio_new;
		}


		public function setVideoNew($video_new) {
			$this->video_new = $video_new;
		}

		public function getVideoNew() {
			return $this->video_new;
		}


		public function setWallReplyNew($wall_reply_new) {
			$this->wall_reply_new = $wall_reply_new;
		}

		public function getWallReplyNew() {
			return $this->wall_reply_new;
		}


		public function setWallReplyEdit($wall_reply_edit) {
			$this->wall_reply_edit = $wall_reply_edit;
		}

		public function getWallReplyEdit() {
			return $this->wall_reply_edit;
		}


		public function setWallReplyDelete($wall_reply_delete) {
			$this->wall_reply_delete = $wall_reply_delete;
		}

		public function getWallReplyDelete() {
			return $this->wall_reply_delete;
		}


		public function setWallPostRestore($wall_post_restore) {
			$this->wall_post_restore = $wall_post_restore;
		}

		public function getWallPostRestore() {
			return $this->wall_post_restore;
		}


		public function setBoardPostNew($board_post_new) {
			$this->board_post_new = $board_post_new;
		}

		public function getBoardPostNew() {
			return $this->board_post_new;
		}


		public function setBoardPostEdit($board_post_edit) {
			$this->board_post_edit = $board_post_edit;
		}

		public function getBoardPostEdit() {
			return $this->board_post_edit;
		}


		public function setBoardPostRestore($board_post_restore) {
			$this->board_post_restore = $board_post_restore;
		}

		public function getBoardPostRestore() {
			return $this->board_post_restore;
		}


		public function setBoardPostDelete($board_post_delete) {
			$this->board_post_delete = $board_post_delete;
		}

		public function getBoardPostDelete() {
			return $this->board_post_delete;
		}


		public function setPhotoCommentNew($photo_comment_new) {
			$this->photo_comment_new = $photo_comment_new;
		}

		public function getPhotoCommentNew() {
			return $this->photo_comment_new;
		}


		public function setPhotoCommentEdit($photo_comment_edit) {
			$this->photo_comment_edit = $photo_comment_edit;
		}

		public function getPhotoCommentEdit() {
			return $this->photo_comment_edit;
		}


		public function setPhotoCommentDelete($photo_comment_delete) {
			$this->photo_comment_delete = $photo_comment_delete;
		}

		public function getPhotoCommentDelete() {
			return $this->photo_comment_delete;
		}


		public function setPhotoCommentRestore($photo_comment_restore) {
			$this->photo_comment_restore = $photo_comment_restore;
		}

		public function getPhotoCommentRestore() {
			return $this->photo_comment_restore;
		}


		public function setVideoCommentNew($video_comment_new) {
			$this->video_comment_new = $video_comment_new;
		}

		public function getVideoCommentNew() {
			return $this->video_comment_new;
		}


		public function setVideoCommentEdit($video_comment_edit) {
			$this->video_comment_edit = $video_comment_edit;
		}

		public function getVideoCommentEdit() {
			return $this->video_comment_edit;
		}


		public function setVideoCommentDelete($video_comment_delete) {
			$this->video_comment_delete = $video_comment_delete;
		}

		public function getVideoCommentDelete() {
			return $this->video_comment_delete;
		}


		public function setVideoCommentRestore($video_comment_restore) {
			$this->video_comment_restore = $video_comment_restore;
		}

		public function getVideoCommentRestore() {
			return $this->video_comment_restore;
		}


		public function setMarketCommentNew($market_comment_new) {
			$this->market_comment_new = $market_comment_new;
		}

		public function getMarketCommentNew() {
			return $this->market_comment_new;
		}


		public function setMarketCommentEdit($market_comment_edit) {
			$this->market_comment_edit = $market_comment_edit;
		}

		public function getMarketCommentEdit() {
			return $this->market_comment_edit;
		}


		public function setMarketCommentDelete($market_comment_delete) {
			$this->market_comment_delete = $market_comment_delete;
		}

		public function getMarketCommentDelete() {
			return $this->market_comment_delete;
		}


		public function setMarketCommentRestore($market_comment_restore) {
			$this->market_comment_restore = $market_comment_restore;
		}

		public function getMarketCommentRestore() {
			return $this->market_comment_restore;
		}


		public function setGroupJoin($group_join) {
			$this->group_join = $group_join;
		}

		public function getGroupJoin() {
			return $this->group_join;
		}


		public function setGroupLeave($group_leave) {
			$this->group_leave = $group_leave;
		}

		public function getGroupLeave() {
			return $this->group_leave;
		}




	}
?>