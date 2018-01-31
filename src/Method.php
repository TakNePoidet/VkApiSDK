<?php

	namespace VkApiSDK;
	use Closure;
	use VkApiSDK\Exception;
	use VkApiSDK\ApiTypes;



	
	class Method {

		private $methods = [
			'users.get' => [
				'response' => ApiTypes\Users\GetResponse::class,
			],

			'users.search' => [
				'response' => ApiTypes\Users\SearchResponse::class,
			],

			'users.isAppUser' => [
				'response' => ApiTypes\Users\IsAppUserResponse::class,
			],

			'users.getSubscriptions' => [
				'response' => ApiTypes\Users\GetSubscriptionsResponse::class,
			],

			'users.getFollowers' => [
				'response' => ApiTypes\Users\GetFollowersResponse::class,
			],

			'users.report' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['user_id','type'],
			],

			'users.getNearby' => [
				'response' => ApiTypes\Users\GetNearbyResponse::class,
				'required' => ['latitude','longitude'],
			],

			'auth.checkPhone' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['phone','client_secret'],
			],

			'auth.signup' => [
				'response' => ApiTypes\Auth\SignupResponse::class,
				'required' => ['first_name','last_name','birthday','client_id','client_secret','phone'],
			],

			'auth.confirm' => [
				'response' => ApiTypes\Auth\ConfirmResponse::class,
				'required' => ['client_id','client_secret','phone','code'],
			],

			'auth.restore' => [
				'response' => ApiTypes\Auth\RestoreResponse::class,
				'required' => ['phone','last_name'],
			],

			'wall.get' => [
				'response' => ApiTypes\Wall\GetResponse::class,
			],

			'wall.search' => [
				'response' => ApiTypes\Wall\SearchResponse::class,
			],

			'photos.createAlbum' => [
				'response' => ApiTypes\Photos\CreateAlbumResponse::class,
				'required' => ['title'],
			],

			'photos.editAlbum' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['album_id'],
			],

			'photos.getAlbums' => [
				'response' => ApiTypes\Photos\GetAlbumsResponse::class,
			],

			'photos.get' => [
				'response' => ApiTypes\Photos\GetResponse::class,
			],

			'photos.getAlbumsCount' => [
				'response' => ApiTypes\Photos\GetAlbumsCountResponse::class,
			],

			'photos.getById' => [
				'response' => ApiTypes\Photos\GetByIdResponse::class,
				'required' => ['photos'],
			],

			'photos.getUploadServer' => [
				'response' => ApiTypes\Photos\GetUploadServerResponse::class,
			],

			'photos.getOwnerCoverPhotoUploadServer' => [
				'response' => ApiTypes\Photos\GetOwnerCoverPhotoUploadServerResponse::class,
			],

			'photos.getOwnerPhotoUploadServer' => [
				'response' => ApiTypes\Photos\GetOwnerPhotoUploadServerResponse::class,
			],

			'photos.getChatUploadServer' => [
				'response' => ApiTypes\Photos\GetChatUploadServerResponse::class,
				'required' => ['chat_id'],
			],

			'photos.getMarketUploadServer' => [
				'response' => ApiTypes\Photos\GetMarketUploadServerResponse::class,
				'required' => ['group_id'],
			],

			'photos.getMarketAlbumUploadServer' => [
				'response' => ApiTypes\Photos\GetMarketAlbumUploadServerResponse::class,
				'required' => ['group_id'],
			],

			'photos.saveMarketPhoto' => [
				'response' => ApiTypes\Photos\SaveMarketPhotoResponse::class,
				'required' => ['photo','server','hash'],
			],

			'photos.saveOwnerCoverPhoto' => [
				'response' => ApiTypes\Photos\SaveOwnerCoverPhotoResponse::class,
				'required' => ['photo','hash'],
			],

			'photos.saveMarketAlbumPhoto' => [
				'response' => ApiTypes\Photos\SaveMarketAlbumPhotoResponse::class,
				'required' => ['group_id','photo','server','hash'],
			],

			'photos.saveOwnerPhoto' => [
				'response' => ApiTypes\Photos\SaveOwnerPhotoResponse::class,
			],

			'photos.saveWallPhoto' => [
				'response' => ApiTypes\Photos\SaveWallPhotoResponse::class,
				'required' => ['photo'],
			],

			'photos.getWallUploadServer' => [
				'response' => ApiTypes\Photos\GetWallUploadServerResponse::class,
			],

			'photos.getMessagesUploadServer' => [
				'response' => ApiTypes\Photos\GetMessagesUploadServerResponse::class,
			],

			'photos.saveMessagesPhoto' => [
				'response' => ApiTypes\Photos\SaveMessagesPhotoResponse::class,
				'required' => ['photo'],
			],

			'photos.report' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['owner_id','photo_id'],
			],

			'photos.reportComment' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['owner_id','comment_id'],
			],

			'photos.search' => [
				'response' => ApiTypes\Photos\SearchResponse::class,
			],

			'friends.get' => [
				'response' => ApiTypes\Friends\GetResponse::class,
			],

			'friends.getOnline' => [
				'response' => ApiTypes\Friends\GetOnlineResponse::class,
			],

			'friends.getMutual' => [
				'response' => ApiTypes\Friends\GetMutualResponse::class,
			],

			'friends.getRecent' => [
				'response' => ApiTypes\Friends\GetRecentResponse::class,
			],

			'friends.getRequests' => [
				'response' => ApiTypes\Friends\GetRequestsResponse::class,
			],

			'friends.add' => [
				'response' => ApiTypes\Friends\AddResponse::class,
				'required' => ['user_id'],
			],

			'friends.edit' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['user_id'],
			],

			'friends.delete' => [
				'response' => ApiTypes\Friends\DeleteResponse::class,
				'required' => ['user_id'],
			],

			'friends.getLists' => [
				'response' => ApiTypes\Friends\GetListClasssResponse::class,
			],

			'friends.addList' => [
				'response' => ApiTypes\Friends\AddListClassResponse::class,
				'required' => ['name'],
			],

			'friends.editList' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['list_id'],
			],

			'friends.deleteList' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['list_id'],
			],

			'friends.getAppUsers' => [
				'response' => ApiTypes\Friends\GetAppUsersResponse::class,
			],

			'friends.getByPhones' => [
				'response' => ApiTypes\Friends\GetByPhonesResponse::class,
			],

			'friends.deleteAllRequests' => [
				'response' => ApiTypes\Ok\Response::class,
			],

			'friends.getSuggestions' => [
				'response' => ApiTypes\Friends\GetSuggestionsResponse::class,
			],

			'friends.areFriends' => [
				'response' => ApiTypes\Friends\AreFriendsResponse::class,
				'required' => ['user_ids'],
			],

			'friends.getAvailableForCall' => [
				'response' => ApiTypes\Friends\GetAvailableForCallResponse::class,
			],

			'friends.search' => [
				'response' => ApiTypes\Friends\SearchResponse::class,
				'required' => ['user_id'],
			],

			'widgets.getComments' => [
				'response' => ApiTypes\Widgets\GetCommentsResponse::class,
			],

			'widgets.getPages' => [
				'response' => ApiTypes\Widgets\GetPagesResponse::class,
			],

			'secure.getAppBalance' => [
				'response' => ApiTypes\Secure\GetAppBalanceResponse::class,
			],

			'secure.getTransactionsHistory' => [
				'response' => ApiTypes\Secure\GetTransactionsHistoryResponse::class,
			],

			'secure.getSMSHistory' => [
				'response' => ApiTypes\Secure\GetSMSHistoryResponse::class,
			],

			'secure.sendSMSNotification' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['user_id','message'],
			],

			'secure.sendNotification' => [
				'response' => ApiTypes\Secure\SendNotificationResponse::class,
				'required' => ['message'],
			],

			'secure.setCounter' => [
				'response' => ApiTypes\Ok\Response::class,
			],

			'secure.setUserLevel' => [
				'response' => ApiTypes\Ok\Response::class,
			],

			'secure.getUserLevel' => [
				'response' => ApiTypes\Secure\GetUserLevelResponse::class,
				'required' => ['user_ids'],
			],

			'streaming.getServerUrl' => [
				'response' => ApiTypes\Streaming\GetServerUrlResponse::class,
			],

			'storage.get' => [
				'response' => ApiTypes\Storage\GetResponse::class,
			],

			'storage.set' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['key'],
			],

			'storage.getKeys' => [
				'response' => ApiTypes\Storage\GetKeysResponse::class,
			],

			'orders.get' => [
				'response' => ApiTypes\Orders\GetResponse::class,
			],

			'orders.getById' => [
				'response' => ApiTypes\Orders\GetByIdResponse::class,
			],

			'orders.changeState' => [
				'response' => ApiTypes\Orders\ChangeStateResponse::class,
				'required' => ['order_id','action'],
			],

			'orders.getAmount' => [
				'response' => ApiTypes\Orders\GetAmountResponse::class,
				'required' => ['user_id','votes'],
			],

			'photos.save' => [
				'response' => ApiTypes\Photos\SaveResponse::class,
			],

			'photos.copy' => [
				'response' => ApiTypes\Photos\CopyResponse::class,
				'required' => ['owner_id','photo_id'],
			],

			'photos.edit' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['photo_id'],
			],

			'photos.move' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['target_album_id','photo_id'],
			],

			'photos.makeCover' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['photo_id'],
			],

			'photos.reorderAlbums' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['album_id'],
			],

			'photos.reorderPhotos' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['photo_id'],
			],

			'photos.getAll' => [
				'response' => ApiTypes\Photos\GetAllResponse::class,
			],

			'photos.getUserPhotos' => [
				'response' => ApiTypes\Photos\GetUserPhotosResponse::class,
			],

			'photos.deleteAlbum' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['album_id'],
			],

			'photos.delete' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['photo_id'],
			],

			'photos.restore' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['photo_id'],
			],

			'photos.confirmTag' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['photo_id','tag_id'],
			],

			'photos.getComments' => [
				'response' => ApiTypes\Photos\GetCommentsResponse::class,
				'required' => ['photo_id'],
			],

			'photos.getAllComments' => [
				'response' => ApiTypes\Photos\GetAllCommentsResponse::class,
			],

			'photos.createComment' => [
				'response' => ApiTypes\Photos\CreateCommentResponse::class,
				'required' => ['photo_id'],
			],

			'photos.deleteComment' => [
				'response' => ApiTypes\Photos\DeleteCommentResponse::class,
				'required' => ['comment_id'],
			],

			'photos.restoreComment' => [
				'response' => ApiTypes\Photos\RestoreCommentResponse::class,
				'required' => ['comment_id'],
			],

			'photos.editComment' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['comment_id'],
			],

			'photos.getTags' => [
				'response' => ApiTypes\Photos\GetTagsResponse::class,
				'required' => ['photo_id'],
			],

			'photos.putTag' => [
				'response' => ApiTypes\Photos\PutTagResponse::class,
				'required' => ['photo_id','user_id'],
			],

			'photos.removeTag' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['photo_id','tag_id'],
			],

			'photos.getNewTags' => [
				'response' => ApiTypes\Photos\GetNewTagsResponse::class,
			],

			'wall.getById' => [
				'response' => ApiTypes\Wall\GetByIdResponse::class,
				'required' => ['posts'],
			],

			'wall.post' => [
				'response' => ApiTypes\Wall\PostResponse::class,
			],

			'wall.repost' => [
				'response' => ApiTypes\Wall\RepostResponse::class,
				'required' => ['object'],
			],

			'wall.getReposts' => [
				'response' => ApiTypes\Wall\GetRepostsResponse::class,
			],

			'wall.edit' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['post_id'],
			],

			'wall.delete' => [
				'response' => ApiTypes\Ok\Response::class,
			],

			'wall.restore' => [
				'response' => ApiTypes\Ok\Response::class,
			],

			'wall.pin' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['post_id'],
			],

			'wall.unpin' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['post_id'],
			],

			'wall.getComments' => [
				'response' => ApiTypes\Wall\GetCommentsResponse::class,
				'required' => ['post_id'],
			],

			'wall.createComment' => [
				'response' => ApiTypes\Wall\CreateCommentResponse::class,
				'required' => ['post_id'],
			],

			'wall.editComment' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['comment_id'],
			],

			'wall.deleteComment' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['comment_id'],
			],

			'wall.restoreComment' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['comment_id'],
			],

			'wall.reportPost' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['owner_id','post_id'],
			],

			'wall.reportComment' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['owner_id','comment_id'],
			],

			'status.get' => [
				'response' => ApiTypes\Status\GetResponse::class,
			],

			'status.set' => [
				'response' => ApiTypes\Ok\Response::class,
			],

			'leads.complete' => [
				'response' => ApiTypes\Leads\CompleteResponse::class,
				'required' => ['vk_sid','secret'],
			],

			'leads.start' => [
				'response' => ApiTypes\Leads\StartResponse::class,
				'required' => ['lead_id','secret'],
			],

			'leads.getStats' => [
				'response' => ApiTypes\Leads\GetStatsResponse::class,
				'required' => ['lead_id'],
			],

			'leads.getUsers' => [
				'response' => ApiTypes\Leads\GetUsersResponse::class,
				'required' => ['offer_id','secret'],
			],

			'leads.checkUser' => [
				'response' => ApiTypes\Leads\CheckUserResponse::class,
				'required' => ['lead_id'],
			],

			'leads.metricHit' => [
				'response' => ApiTypes\Leads\MetricHitResponse::class,
				'required' => ['data'],
			],

			'pages.get' => [
				'response' => ApiTypes\Pages\GetResponse::class,
			],

			'pages.save' => [
				'response' => ApiTypes\Pages\SaveResponse::class,
			],

			'pages.saveAccess' => [
				'response' => ApiTypes\Pages\SaveAccessResponse::class,
				'required' => ['page_id'],
			],

			'pages.getHistory' => [
				'response' => ApiTypes\Pages\GetHistoryResponse::class,
				'required' => ['page_id'],
			],

			'pages.getTitles' => [
				'response' => ApiTypes\Pages\GetTitlesResponse::class,
			],

			'pages.getVersion' => [
				'response' => ApiTypes\Pages\GetVersionResponse::class,
				'required' => ['version_id'],
			],

			'pages.parseWiki' => [
				'response' => ApiTypes\Pages\ParseWikiResponse::class,
				'required' => ['text'],
			],

			'pages.clearCache' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['url'],
			],

			'groups.isMember' => [
				'response' => ApiTypes\Groups\IsMemberResponse::class,
				'required' => ['group_id'],
			],

			'groups.getById' => [
				'response' => ApiTypes\Groups\GetByIdResponse::class,
			],

			'groups.get' => [
				'response' => ApiTypes\Groups\GetResponse::class,
			],

			'groups.getMembers' => [
				'response' => ApiTypes\Groups\GetMembersResponse::class,
			],

			'groups.join' => [
				'response' => ApiTypes\Ok\Response::class,
			],

			'groups.leave' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['group_id'],
			],

			'groups.search' => [
				'response' => ApiTypes\Groups\SearchResponse::class,
				'required' => ['q'],
			],

			'groups.getCatalog' => [
				'response' => ApiTypes\Groups\GetCatalogResponse::class,
			],

			'groups.getCatalogInfo' => [
				'response' => ApiTypes\Groups\GetCatalogInfoResponse::class,
			],

			'groups.getInvites' => [
				'response' => ApiTypes\Groups\GetInvitesResponse::class,
			],

			'groups.getInvitedUsers' => [
				'response' => ApiTypes\Groups\GetInvitedUsersResponse::class,
				'required' => ['group_id'],
			],

			'groups.banUser' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['group_id','user_id'],
			],

			'groups.unbanUser' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['group_id','user_id'],
			],

			'groups.getBanned' => [
				'response' => ApiTypes\Groups\GetBannedResponse::class,
				'required' => ['group_id'],
			],

			'groups.create' => [
				'response' => ApiTypes\Groups\CreateResponse::class,
				'required' => ['title'],
			],

			'groups.edit' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['group_id'],
			],

			'groups.editPlace' => [
				'response' => ApiTypes\Groups\EditPlaceResponse::class,
				'required' => ['group_id'],
			],

			'groups.getSettings' => [
				'response' => ApiTypes\Groups\GetSettingsResponse::class,
				'required' => ['group_id'],
			],

			'groups.getRequests' => [
				'response' => ApiTypes\Groups\GetRequestsResponse::class,
				'required' => ['group_id'],
			],

			'groups.editManager' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['group_id','user_id'],
			],

			'groups.invite' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['group_id','user_id'],
			],

			'groups.addLink' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['group_id','link'],
			],

			'groups.deleteLink' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['group_id','link_id'],
			],

			'groups.editLink' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['group_id','link_id'],
			],

			'groups.reorderLink' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['group_id','link_id'],
			],

			'groups.removeUser' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['group_id','user_id'],
			],

			'groups.approveRequest' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['group_id','user_id'],
			],

			'groups.getCallbackConfirmationCode' => [
				'response' => ApiTypes\Groups\GetCallbackConfirmationCodeResponse::class,
				'required' => ['group_id'],
			],

			'groups.getCallbackSettings' => [
				'response' => ApiTypes\Groups\GetCallbackSettingsResponse::class,
				'required' => ['group_id'],
			],

			'groups.setCallbackSettings' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['group_id'],
			],

			'board.getTopics' => [
				'response' => ApiTypes\Board\GetTopicsResponse::class,
				'required' => ['group_id'],
			],

			'board.getComments' => [
				'response' => ApiTypes\Board\GetCommentsResponse::class,
				'required' => ['group_id','topic_id'],
			],

			'board.addTopic' => [
				'response' => ApiTypes\Board\AddTopicResponse::class,
				'required' => ['group_id','title'],
			],

			'board.createComment' => [
				'response' => ApiTypes\Board\CreateCommentResponse::class,
				'required' => ['group_id','topic_id'],
			],

			'board.deleteTopic' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['group_id','topic_id'],
			],

			'board.editTopic' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['group_id','topic_id','title'],
			],

			'board.editComment' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['group_id','topic_id','comment_id'],
			],

			'board.restoreComment' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['group_id','topic_id','comment_id'],
			],

			'board.deleteComment' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['group_id','topic_id','comment_id'],
			],

			'board.openTopic' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['group_id','topic_id'],
			],

			'board.closeTopic' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['group_id','topic_id'],
			],

			'board.fixTopic' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['group_id','topic_id'],
			],

			'board.unfixTopic' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['group_id','topic_id'],
			],

			'video.get' => [
				'response' => ApiTypes\Video\GetResponse::class,
			],

			'video.edit' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['video_id'],
			],

			'video.add' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['video_id','owner_id'],
			],

			'video.save' => [
				'response' => ApiTypes\Video\SaveResponse::class,
			],

			'video.delete' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['video_id'],
			],

			'video.restore' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['video_id'],
			],

			'video.search' => [
				'response' => ApiTypes\Video\SearchResponse::class,
				'required' => ['q'],
			],

			'video.getUserVideos' => [
				'response' => ApiTypes\Video\GetUserVideosResponse::class,
			],

			'video.getAlbums' => [
				'response' => ApiTypes\Video\GetAlbumsResponse::class,
			],

			'video.getAlbumById' => [
				'response' => ApiTypes\Video\GetAlbumByIdResponse::class,
				'required' => ['album_id'],
			],

			'video.addAlbum' => [
				'response' => ApiTypes\Video\AddAlbumResponse::class,
			],

			'video.editAlbum' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['album_id','title'],
			],

			'video.deleteAlbum' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['album_id'],
			],

			'video.reorderAlbums' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['album_id'],
			],

			'video.reorderVideos' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['owner_id','video_id'],
			],

			'video.addToAlbum' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['owner_id','video_id'],
			],

			'video.removeFromAlbum' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['owner_id','video_id'],
			],

			'video.getAlbumsByVideo' => [
				'response' => ApiTypes\Video\GetAlbumsByVideoResponse::class,
				'required' => ['owner_id','video_id'],
			],

			'video.getComments' => [
				'response' => ApiTypes\Video\GetCommentsResponse::class,
				'required' => ['video_id'],
			],

			'video.createComment' => [
				'response' => ApiTypes\Video\CreateCommentResponse::class,
				'required' => ['video_id'],
			],

			'video.deleteComment' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['comment_id'],
			],

			'video.restoreComment' => [
				'response' => ApiTypes\Video\RestoreCommentResponse::class,
				'required' => ['comment_id'],
			],

			'video.editComment' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['comment_id'],
			],

			'video.getTags' => [
				'response' => ApiTypes\Video\GetTagsResponse::class,
				'required' => ['video_id'],
			],

			'video.putTag' => [
				'response' => ApiTypes\Video\PutTagResponse::class,
				'required' => ['user_id','video_id'],
			],

			'video.removeTag' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['tag_id','video_id'],
			],

			'video.getNewTags' => [
				'response' => ApiTypes\Video\GetNewTagsResponse::class,
			],

			'video.report' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['owner_id','video_id'],
			],

			'video.reportComment' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['owner_id','comment_id'],
			],

			'video.getCatalog' => [
				'response' => ApiTypes\Video\GetCatalogResponse::class,
			],

			'video.getCatalogSection' => [
				'response' => ApiTypes\Video\GetCatalogSectionResponse::class,
				'required' => ['section_id','from'],
			],

			'video.hideCatalogSection' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['section_id'],
			],

			'notes.get' => [
				'response' => ApiTypes\Notes\GetResponse::class,
			],

			'notes.getById' => [
				'response' => ApiTypes\Notes\GetByIdResponse::class,
				'required' => ['note_id'],
			],

			'notes.add' => [
				'response' => ApiTypes\Notes\AddResponse::class,
				'required' => ['title','text'],
			],

			'notes.edit' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['note_id','title','text'],
			],

			'notes.delete' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['note_id'],
			],

			'notes.getComments' => [
				'response' => ApiTypes\Notes\GetCommentsResponse::class,
				'required' => ['note_id'],
			],

			'notes.createComment' => [
				'response' => ApiTypes\Notes\CreateCommentResponse::class,
				'required' => ['note_id','message'],
			],

			'notes.editComment' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['comment_id'],
			],

			'notes.deleteComment' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['comment_id'],
			],

			'notes.restoreComment' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['comment_id'],
			],

			'places.add' => [
				'response' => ApiTypes\Places\AddResponse::class,
				'required' => ['title','latitude','longitude'],
			],

			'places.getById' => [
				'response' => ApiTypes\Places\GetByIdResponse::class,
				'required' => ['places'],
			],

			'places.search' => [
				'response' => ApiTypes\Places\SearchResponse::class,
				'required' => ['latitude','longitude'],
			],

			'places.checkin' => [
				'response' => ApiTypes\Places\CheckinResponse::class,
			],

			'places.getCheckins' => [
				'response' => ApiTypes\Places\GetCheckinsResponse::class,
			],

			'places.getTypes' => [
				'response' => ApiTypes\Places\GetTypesResponse::class,
			],

			'account.getCounters' => [
				'response' => ApiTypes\Account\GetCountersResponse::class,
			],

			'account.setNameInMenu' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['user_id'],
			],

			'account.setOnline' => [
				'response' => ApiTypes\Ok\Response::class,
			],

			'account.setOffline' => [
				'response' => ApiTypes\Ok\Response::class,
			],

			'account.lookupContacts' => [
				'response' => ApiTypes\Account\LookupContactsResponse::class,
				'required' => ['service'],
			],

			'account.registerDevice' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['token','device_id'],
			],

			'account.unregisterDevice' => [
				'response' => ApiTypes\Ok\Response::class,
			],

			'account.setSilenceMode' => [
				'response' => ApiTypes\Ok\Response::class,
			],

			'account.getPushSettings' => [
				'response' => ApiTypes\Account\GetPushSettingsResponse::class,
			],

			'account.setPushSettings' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['device_id'],
			],

			'account.getAppPermissions' => [
				'response' => ApiTypes\Account\GetAppPermissionsResponse::class,
				'required' => ['user_id'],
			],

			'account.getActiveOffers' => [
				'response' => ApiTypes\Account\GetActiveOffersResponse::class,
			],

			'account.banUser' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['user_id'],
			],

			'account.unbanUser' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['user_id'],
			],

			'account.getBanned' => [
				'response' => ApiTypes\Account\GetBannedResponse::class,
			],

			'account.getInfo' => [
				'response' => ApiTypes\Account\GetInfoResponse::class,
			],

			'account.setInfo' => [
				'response' => ApiTypes\Ok\Response::class,
			],

			'account.changePassword' => [
				'response' => ApiTypes\Account\ChangePasswordResponse::class,
				'required' => ['new_password'],
			],

			'account.getProfileInfo' => [
				'response' => ApiTypes\Account\GetProfileInfoResponse::class,
			],

			'account.saveProfileInfo' => [
				'response' => ApiTypes\Account\SaveProfileInfoResponse::class,
			],

			'messages.get' => [
				'response' => ApiTypes\Messages\GetResponse::class,
			],

			'messages.getDialogs' => [
				'response' => ApiTypes\Messages\GetDialogsResponse::class,
			],

			'messages.getById' => [
				'response' => ApiTypes\Messages\GetByIdResponse::class,
				'required' => ['message_ids'],
			],

			'messages.search' => [
				'response' => ApiTypes\Messages\SearchResponse::class,
			],

			'messages.getHistory' => [
				'response' => ApiTypes\Messages\GetHistoryResponse::class,
			],

			'messages.getHistoryAttachments' => [
				'response' => ApiTypes\Messages\GetHistoryAttachmentsResponse::class,
				'required' => ['peer_id'],
			],

			'messages.send' => [
				'response' => ApiTypes\Messages\SendResponse::class,
			],

			'messages.delete' => [
				'response' => ApiTypes\Messages\DeleteResponse::class,
			],

			'messages.deleteDialog' => [
				'response' => ApiTypes\Ok\Response::class,
			],

			'messages.restore' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['message_id'],
			],

			'messages.markAsRead' => [
				'response' => ApiTypes\Ok\Response::class,
			],

			'messages.markAsImportant' => [
				'response' => ApiTypes\Messages\MarkAsImportantResponse::class,
			],

			'messages.markAsImportantDialog' => [
				'response' => ApiTypes\Ok\Response::class,
			],

			'messages.markAsUnansweredDialog' => [
				'response' => ApiTypes\Ok\Response::class,
			],

			'messages.getLongPollServer' => [
				'response' => ApiTypes\Messages\GetLongPollServerResponse::class,
			],

			'messages.getLongPollHistory' => [
				'response' => ApiTypes\Messages\GetLongPollHistoryResponse::class,
			],

			'messages.getChat' => [
				'response' => ApiTypes\Messages\GetChatResponse::class,
			],

			'messages.createChat' => [
				'response' => ApiTypes\Messages\CreateChatResponse::class,
				'required' => ['user_ids'],
			],

			'messages.editChat' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['chat_id','title'],
			],

			'messages.getChatUsers' => [
				'response' => ApiTypes\Messages\GetChatUsersResponse::class,
			],

			'messages.setActivity' => [
				'response' => ApiTypes\Ok\Response::class,
			],

			'messages.searchDialogs' => [
				'response' => ApiTypes\Messages\SearchDialogsResponse::class,
			],

			'messages.addChatUser' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['chat_id','user_id'],
			],

			'messages.removeChatUser' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['chat_id','user_id'],
			],

			'messages.getLastActivity' => [
				'response' => ApiTypes\Messages\GetLastActivityResponse::class,
				'required' => ['user_id'],
			],

			'messages.setChatPhoto' => [
				'response' => ApiTypes\Messages\SetChatPhotoResponse::class,
				'required' => ['file'],
			],

			'messages.deleteChatPhoto' => [
				'response' => ApiTypes\Messages\DeleteChatPhotoResponse::class,
				'required' => ['chat_id'],
			],

			'messages.denyMessagesFromGroup' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['group_id'],
			],

			'messages.allowMessagesFromGroup' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['group_id'],
			],

			'messages.isMessagesFromGroupAllowed' => [
				'response' => ApiTypes\Messages\IsMessagesFromGroupAllowedResponse::class,
				'required' => ['group_id','user_id'],
			],

			'newsfeed.get' => [
				'response' => ApiTypes\Newsfeed\GetResponse::class,
			],

			'newsfeed.getRecommended' => [
				'response' => ApiTypes\Newsfeed\GetRecommendedResponse::class,
			],

			'newsfeed.getComments' => [
				'response' => ApiTypes\Newsfeed\GetCommentsResponse::class,
			],

			'newsfeed.getMentions' => [
				'response' => ApiTypes\Newsfeed\GetMentionsResponse::class,
			],

			'newsfeed.getBanned' => [
				'response' => ApiTypes\Newsfeed\GetBannedResponse::class,
			],

			'newsfeed.addBan' => [
				'response' => ApiTypes\Ok\Response::class,
			],

			'newsfeed.deleteBan' => [
				'response' => ApiTypes\Ok\Response::class,
			],

			'newsfeed.ignoreItem' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['type','owner_id','item_id'],
			],

			'newsfeed.unignoreItem' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['type','owner_id','item_id'],
			],

			'newsfeed.search' => [
				'response' => ApiTypes\Newsfeed\SearchResponse::class,
			],

			'newsfeed.getLists' => [
				'response' => ApiTypes\Newsfeed\GetListClasssResponse::class,
			],

			'newsfeed.saveList' => [
				'response' => ApiTypes\Newsfeed\SaveListClassResponse::class,
				'required' => ['title'],
			],

			'newsfeed.deleteList' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['list_id'],
			],

			'newsfeed.unsubscribe' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['type','item_id'],
			],

			'newsfeed.getSuggestedSources' => [
				'response' => ApiTypes\Newsfeed\GetSuggestedSourcesResponse::class,
			],

			'likes.getList' => [
				'response' => ApiTypes\Likes\GetListClassResponse::class,
				'required' => ['type'],
			],

			'likes.add' => [
				'response' => ApiTypes\Likes\AddResponse::class,
				'required' => ['type','item_id'],
			],

			'likes.delete' => [
				'response' => ApiTypes\Likes\DeleteResponse::class,
				'required' => ['type','item_id'],
			],

			'likes.isLiked' => [
				'response' => ApiTypes\Likes\IsLikedResponse::class,
				'required' => ['type','item_id'],
			],

			'polls.getById' => [
				'response' => ApiTypes\Polls\GetByIdResponse::class,
				'required' => ['poll_id'],
			],

			'polls.addVote' => [
				'response' => ApiTypes\Polls\AddVoteResponse::class,
				'required' => ['poll_id','answer_id'],
			],

			'polls.deleteVote' => [
				'response' => ApiTypes\Polls\DeleteVoteResponse::class,
				'required' => ['poll_id','answer_id'],
			],

			'polls.getVoters' => [
				'response' => ApiTypes\Polls\GetVotersResponse::class,
				'required' => ['poll_id','answer_ids'],
			],

			'polls.create' => [
				'response' => ApiTypes\Polls\CreateResponse::class,
			],

			'polls.edit' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['owner_id','poll_id'],
			],

			'docs.get' => [
				'response' => ApiTypes\Docs\GetResponse::class,
			],

			'docs.getById' => [
				'response' => ApiTypes\Docs\GetByIdResponse::class,
				'required' => ['docs'],
			],

			'docs.getUploadServer' => [
				'response' => ApiTypes\Docs\GetUploadServerResponse::class,
			],

			'docs.getWallUploadServer' => [
				'response' => ApiTypes\Docs\GetWallUploadServerResponse::class,
			],

			'docs.save' => [
				'response' => ApiTypes\Docs\SaveResponse::class,
				'required' => ['file'],
			],

			'docs.delete' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['owner_id','doc_id'],
			],

			'docs.add' => [
				'response' => ApiTypes\Docs\AddResponse::class,
				'required' => ['owner_id','doc_id'],
			],

			'docs.getTypes' => [
				'response' => ApiTypes\Docs\GetTypesResponse::class,
				'required' => ['owner_id'],
			],

			'docs.search' => [
				'response' => ApiTypes\Docs\SearchResponse::class,
				'required' => ['q'],
			],

			'docs.edit' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['owner_id','doc_id'],
			],

			'fave.getUsers' => [
				'response' => ApiTypes\Fave\GetUsersResponse::class,
			],

			'fave.getPhotos' => [
				'response' => ApiTypes\Fave\GetPhotosResponse::class,
			],

			'fave.getPosts' => [
				'response' => ApiTypes\Fave\GetPostsResponse::class,
			],

			'fave.getVideos' => [
				'response' => ApiTypes\Fave\GetVideosResponse::class,
			],

			'fave.getLinks' => [
				'response' => ApiTypes\Fave\GetLinksResponse::class,
			],

			'fave.getMarketItems' => [
				'response' => ApiTypes\Fave\GetMarketItemsResponse::class,
			],

			'fave.addUser' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['user_id'],
			],

			'fave.removeUser' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['user_id'],
			],

			'fave.addGroup' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['group_id'],
			],

			'fave.removeGroup' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['group_id'],
			],

			'fave.addLink' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['link'],
			],

			'fave.removeLink' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['link_id'],
			],

			'notifications.get' => [
				'response' => ApiTypes\Notifications\GetResponse::class,
			],

			'notifications.markAsViewed' => [
				'response' => ApiTypes\Notifications\MarkAsViewedResponse::class,
			],

			'stats.get' => [
				'response' => ApiTypes\Stats\GetResponse::class,
			],

			'stats.trackVisitor' => [
				'response' => ApiTypes\Ok\Response::class,
			],

			'stats.getPostReach' => [
				'response' => ApiTypes\Stats\GetPostReachResponse::class,
				'required' => ['owner_id','post_id'],
			],

			'search.getHints' => [
				'response' => ApiTypes\Search\GetHintsResponse::class,
			],

			'apps.getCatalog' => [
				'response' => ApiTypes\Apps\GetCatalogResponse::class,
				'required' => ['count'],
			],

			'apps.get' => [
				'response' => ApiTypes\Apps\GetResponse::class,
			],

			'apps.sendRequest' => [
				'response' => ApiTypes\Apps\SendRequestResponse::class,
				'required' => ['user_id'],
			],

			'apps.deleteAppRequests' => [
				'response' => ApiTypes\Ok\Response::class,
			],

			'apps.getFriendsList' => [
				'response' => ApiTypes\Apps\GetFriendsListClassResponse::class,
			],

			'apps.getLeaderboard' => [
				'response' => ApiTypes\Apps\GetLeaderboardResponse::class,
				'required' => ['type'],
			],

			'secure.addAppEvent' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['user_id','activity_id'],
			],

			'apps.getScore' => [
				'response' => ApiTypes\Apps\GetScoreResponse::class,
				'required' => ['user_id'],
			],

			'utils.checkLink' => [
				'response' => ApiTypes\Utils\CheckLinkResponse::class,
				'required' => ['url'],
			],

			'utils.deleteFromLastShortened' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['key'],
			],

			'utils.getLastShortenedLinks' => [
				'response' => ApiTypes\Utils\GetLastShortenedLinksResponse::class,
			],

			'utils.getLinkStats' => [
				'response' => ApiTypes\Utils\GetLinkStatsResponse::class,
				'required' => ['key'],
			],

			'utils.getShortLink' => [
				'response' => ApiTypes\Utils\GetShortLinkResponse::class,
				'required' => ['url'],
			],

			'utils.resolveScreenName' => [
				'response' => ApiTypes\Utils\ResolveScreenNameResponse::class,
				'required' => ['screen_name'],
			],

			'utils.getServerTime' => [
				'response' => ApiTypes\Utils\GetServerTimeResponse::class,
			],

			'database.getCountries' => [
				'response' => ApiTypes\Database\GetCountriesResponse::class,
			],

			'database.getRegions' => [
				'response' => ApiTypes\Database\GetRegionsResponse::class,
				'required' => ['country_id'],
			],

			'database.getStreetsById' => [
				'response' => ApiTypes\Database\GetStreetsByIdResponse::class,
				'required' => ['street_ids'],
			],

			'database.getCountriesById' => [
				'response' => ApiTypes\Database\GetCountriesByIdResponse::class,
			],

			'database.getCities' => [
				'response' => ApiTypes\Database\GetCitiesResponse::class,
				'required' => ['country_id'],
			],

			'database.getCitiesById' => [
				'response' => ApiTypes\Database\GetCitiesByIdResponse::class,
			],

			'database.getUniversities' => [
				'response' => ApiTypes\Database\GetUniversitiesResponse::class,
			],

			'database.getSchools' => [
				'response' => ApiTypes\Database\GetSchoolsResponse::class,
				'required' => ['city_id'],
			],

			'database.getSchoolClasses' => [
				'response' => ApiTypes\Database\GetSchoolClassesResponse::class,
			],

			'database.getFaculties' => [
				'response' => ApiTypes\Database\GetFacultiesResponse::class,
				'required' => ['university_id'],
			],

			'database.getChairs' => [
				'response' => ApiTypes\Database\GetChairsResponse::class,
				'required' => ['faculty_id'],
			],

			'gifts.get' => [
				'response' => ApiTypes\Gifts\GetResponse::class,
			],

			'ads.getAccounts' => [
				'response' => ApiTypes\Ads\GetAccountsResponse::class,
			],

			'ads.getClients' => [
				'response' => ApiTypes\Ads\GetClientsResponse::class,
				'required' => ['account_id'],
			],

			'ads.createClients' => [
				'response' => ApiTypes\Ads\CreateClientsResponse::class,
				'required' => ['account_id','data'],
			],

			'ads.updateClients' => [
				'response' => ApiTypes\Ads\UpdateClientsResponse::class,
				'required' => ['account_id','data'],
			],

			'ads.deleteClients' => [
				'response' => ApiTypes\Ads\DeleteClientsResponse::class,
				'required' => ['account_id','ids'],
			],

			'ads.getCampaigns' => [
				'response' => ApiTypes\Ads\GetCampaignsResponse::class,
				'required' => ['account_id'],
			],

			'ads.createCampaigns' => [
				'response' => ApiTypes\Ads\CreateCampaignsResponse::class,
				'required' => ['account_id','data'],
			],

			'ads.updateCampaigns' => [
				'response' => ApiTypes\Ads\UpdateCampaignsResponse::class,
				'required' => ['account_id','data'],
			],

			'ads.deleteCampaigns' => [
				'response' => ApiTypes\Ads\DeleteCampaignsResponse::class,
				'required' => ['account_id','ids'],
			],

			'ads.getAds' => [
				'response' => ApiTypes\Ads\GetAdsResponse::class,
				'required' => ['account_id'],
			],

			'ads.getAdsLayout' => [
				'response' => ApiTypes\Ads\GetAdsLayoutResponse::class,
				'required' => ['account_id'],
			],

			'ads.getAdsTargeting' => [
				'response' => ApiTypes\Ads\GetAdsTargetingResponse::class,
				'required' => ['account_id'],
			],

			'ads.createAds' => [
				'response' => ApiTypes\Ads\CreateAdsResponse::class,
				'required' => ['account_id','data'],
			],

			'ads.updateAds' => [
				'response' => ApiTypes\Ads\UpdateAdsResponse::class,
				'required' => ['account_id','data'],
			],

			'ads.deleteAds' => [
				'response' => ApiTypes\Ads\DeleteAdsResponse::class,
				'required' => ['account_id','ids'],
			],

			'ads.checkLink' => [
				'response' => ApiTypes\Ads\CheckLinkResponse::class,
				'required' => ['account_id','link_type','link_url'],
			],

			'ads.getStatistics' => [
				'response' => ApiTypes\Ads\GetStatisticsResponse::class,
				'required' => ['account_id','ids_type','ids','period','date_from','date_to'],
			],

			'ads.getDemographics' => [
				'response' => ApiTypes\Ads\GetDemographicsResponse::class,
				'required' => ['account_id','ids_type','ids','period','date_from','date_to'],
			],

			'ads.getAdsPostsReach' => [
				'response' => ApiTypes\Ads\GetAdsPostsReachResponse::class,
				'required' => ['account_id','ads_ids'],
			],

			'ads.getBudget' => [
				'response' => ApiTypes\Ads\GetBudgetResponse::class,
				'required' => ['account_id'],
			],

			'ads.getOfficeUsers' => [
				'response' => ApiTypes\Ads\GetOfficeUsersResponse::class,
				'required' => ['account_id'],
			],

			'ads.addOfficeUsers' => [
				'response' => ApiTypes\Ads\AddOfficeUsersResponse::class,
				'required' => ['account_id','data'],
			],

			'ads.removeOfficeUsers' => [
				'response' => ApiTypes\Ads\RemoveOfficeUsersResponse::class,
				'required' => ['account_id','ids'],
			],

			'ads.getTargetingStats' => [
				'response' => ApiTypes\Ads\GetTargetingStatsResponse::class,
				'required' => ['account_id','link_url'],
			],

			'ads.getSuggestions' => [
				'response' => ApiTypes\Ads\GetSuggestionsResponse::class,
				'required' => ['section'],
			],

			'ads.getCategories' => [
				'response' => ApiTypes\Ads\GetCategoriesResponse::class,
			],

			'ads.getUploadURL' => [
				'response' => ApiTypes\Ads\GetUploadURLResponse::class,
				'required' => ['ad_format'],
			],

			'ads.getVideoUploadURL' => [
				'response' => ApiTypes\Ads\GetVideoUploadURLResponse::class,
			],

			'ads.getFloodStats' => [
				'response' => ApiTypes\Ads\GetFloodStatsResponse::class,
				'required' => ['account_id'],
			],

			'ads.getRejectionReason' => [
				'response' => ApiTypes\Ads\GetRejectionReasonResponse::class,
				'required' => ['account_id','ad_id'],
			],

			'ads.createTargetGroup' => [
				'response' => ApiTypes\Ads\CreateTargetGroupResponse::class,
				'required' => ['account_id','name'],
			],

			'ads.updateTargetGroup' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['account_id','target_group_id','name'],
			],

			'ads.deleteTargetGroup' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['account_id','target_group_id'],
			],

			'ads.getTargetGroups' => [
				'response' => ApiTypes\Ads\GetTargetGroupsResponse::class,
				'required' => ['account_id'],
			],

			'ads.importTargetContacts' => [
				'response' => ApiTypes\Ads\ImportTargetContactsResponse::class,
				'required' => ['account_id','target_group_id','contacts'],
			],

			'secure.checkToken' => [
				'response' => ApiTypes\Secure\CheckTokenResponse::class,
			],

			'market.get' => [
				'response' => ApiTypes\Market\GetResponse::class,
				'required' => ['owner_id'],
			],

			'market.getById' => [
				'response' => ApiTypes\Market\GetByIdResponse::class,
				'required' => ['item_ids'],
			],

			'market.search' => [
				'response' => ApiTypes\Market\SearchResponse::class,
				'required' => ['owner_id'],
			],

			'market.getAlbums' => [
				'response' => ApiTypes\Market\GetAlbumsResponse::class,
				'required' => ['owner_id'],
			],

			'market.getAlbumById' => [
				'response' => ApiTypes\Market\GetAlbumByIdResponse::class,
				'required' => ['owner_id','album_ids'],
			],

			'market.createComment' => [
				'response' => ApiTypes\Market\CreateCommentResponse::class,
				'required' => ['owner_id','item_id'],
			],

			'market.getComments' => [
				'response' => ApiTypes\Market\GetCommentsResponse::class,
				'required' => ['owner_id','item_id'],
			],

			'market.deleteComment' => [
				'response' => ApiTypes\Market\DeleteCommentResponse::class,
				'required' => ['owner_id','comment_id'],
			],

			'market.restoreComment' => [
				'response' => ApiTypes\Market\RestoreCommentResponse::class,
				'required' => ['owner_id','comment_id'],
			],

			'market.editComment' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['owner_id','comment_id'],
			],

			'market.reportComment' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['owner_id','comment_id','reason'],
			],

			'market.getCategories' => [
				'response' => ApiTypes\Market\GetCategoriesResponse::class,
			],

			'market.report' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['owner_id','item_id','reason'],
			],

			'market.add' => [
				'response' => ApiTypes\Market\AddResponse::class,
				'required' => ['owner_id','name','description','category_id','price','main_photo_id'],
			],

			'market.edit' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['owner_id','item_id','name','description','category_id','price','main_photo_id'],
			],

			'market.delete' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['owner_id','item_id'],
			],

			'market.restore' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['owner_id','item_id'],
			],

			'market.reorderItems' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['owner_id','item_id'],
			],

			'market.reorderAlbums' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['owner_id','album_id'],
			],

			'market.addAlbum' => [
				'response' => ApiTypes\Market\AddAlbumResponse::class,
				'required' => ['owner_id','title'],
			],

			'market.editAlbum' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['owner_id','album_id','title'],
			],

			'market.deleteAlbum' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['owner_id','album_id'],
			],

			'market.removeFromAlbum' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['owner_id','item_id','album_ids'],
			],

			'market.addToAlbum' => [
				'response' => ApiTypes\Ok\Response::class,
				'required' => ['owner_id','item_id','album_ids'],
			],
		];




		public function get($method) {
			if (!empty($this->methods[$method])) {
				return $this->methods[$method];
			} else {
				throw new Exception("Method does not exist");
			}
		}
	}