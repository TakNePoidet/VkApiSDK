<?php

	namespace VkApiSDK\ApiTypes\Groups;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class GroupFull extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'name' 	 => true,
			'screen_name' 	 => true,
			'deactivated' 	 => true,
			'is_closed' 	 => true,
			'type' 	 => true,
			'is_admin' 	 => ApiTypes\Base\BoolInt::class,
			'admin_level' 	 => true,
			'is_member' 	 => ApiTypes\Base\BoolInt::class,
			'photo_50' 	 => true,
			'photo_100' 	 => true,
			'photo_200' 	 => true,
			'market' 	 => ApiTypes\Groups\MarketInfo::class,
			'member_status' 	 => true,
			'is_favorite' 	 => ApiTypes\Base\BoolInt::class,
			'is_subscribed' 	 => ApiTypes\Base\BoolInt::class,
			'city' 	 => ApiTypes\Base\Object::class,
			'country' 	 => ApiTypes\Base\Country::class,
			'verified' 	 => ApiTypes\Base\BoolInt::class,
			'description' 	 => true,
			'wiki_page' 	 => true,
			'members_count' 	 => true,
			'counters' 	 => ApiTypes\Groups\CountersGroup::class,
			'cover' 	 => ApiTypes\Groups\Cover::class,
			'can_post' 	 => ApiTypes\Base\BoolInt::class,
			'can_see_all_posts' 	 => ApiTypes\Base\BoolInt::class,
			'activity' 	 => true,
			'fixed_post' 	 => true,
			'can_create_topic' 	 => ApiTypes\Base\BoolInt::class,
			'can_upload_video' 	 => ApiTypes\Base\BoolInt::class,
			'has_photo' 	 => ApiTypes\Base\BoolInt::class,
			'status' 	 => true,
			'main_album_id' 	 => true,
			'links' 	 => array(ApiTypes\Groups\LinksItem::class),
			'contacts' 	 => array(ApiTypes\Groups\ContactsItem::class),
			'site' 	 => true,
			'main_section' 	 => true,
			'trending' 	 => ApiTypes\Base\BoolInt::class,
			'can_message' 	 => ApiTypes\Base\BoolInt::class,
			'is_messages_allowed' 	 => ApiTypes\Base\BoolInt::class,
			'start_date' 	 => true,
			'finish_date' 	 => true,
			'age_limits' 	 => true,
			'ban_info' 	 => ApiTypes\Groups\GroupBanInfo::class,
		];


		protected $id;
		protected $name;
		protected $screen_name;
		protected $deactivated;
		protected $is_closed;
		protected $type;
		protected $is_admin;
		protected $admin_level;
		protected $is_member;
		protected $photo_50;
		protected $photo_100;
		protected $photo_200;
		protected $market;
		protected $member_status;
		protected $is_favorite;
		protected $is_subscribed;
		protected $city;
		protected $country;
		protected $verified;
		protected $description;
		protected $wiki_page;
		protected $members_count;
		protected $counters;
		protected $cover;
		protected $can_post;
		protected $can_see_all_posts;
		protected $activity;
		protected $fixed_post;
		protected $can_create_topic;
		protected $can_upload_video;
		protected $has_photo;
		protected $status;
		protected $main_album_id;
		protected $links;
		protected $contacts;
		protected $site;
		protected $main_section;
		protected $trending;
		protected $can_message;
		protected $is_messages_allowed;
		protected $start_date;
		protected $finish_date;
		protected $age_limits;
		protected $ban_info;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setName($name) {
			$this->name = $name;
		}

		public function getName() {
			return $this->name;
		}


		public function setScreenName($screen_name) {
			$this->screen_name = $screen_name;
		}

		public function getScreenName() {
			return $this->screen_name;
		}


		public function setDeactivated($deactivated) {
			$this->deactivated = $deactivated;
		}

		public function getDeactivated() {
			return $this->deactivated;
		}


		public function setIsClosed($is_closed) {
			$this->is_closed = (int) $is_closed;
		}

		public function getIsClosed() {
			return (int) $this->is_closed;
		}


		public function setType($type) {
			$this->type = $type;
		}

		public function getType() {
			return $this->type;
		}


		public function setIsAdmin($is_admin) {
			$this->is_admin = $is_admin;
		}

		public function getIsAdmin() {
			return $this->is_admin;
		}


		public function setAdminLevel($admin_level) {
			$this->admin_level = (int) $admin_level;
		}

		public function getAdminLevel() {
			return (int) $this->admin_level;
		}


		public function setIsMember($is_member) {
			$this->is_member = $is_member;
		}

		public function getIsMember() {
			return $this->is_member;
		}


		public function setPhoto50($photo_50) {
			$this->photo_50 = $photo_50;
		}

		public function getPhoto50() {
			return $this->photo_50;
		}


		public function setPhoto100($photo_100) {
			$this->photo_100 = $photo_100;
		}

		public function getPhoto100() {
			return $this->photo_100;
		}


		public function setPhoto200($photo_200) {
			$this->photo_200 = $photo_200;
		}

		public function getPhoto200() {
			return $this->photo_200;
		}


		public function setMarket($market) {
			$this->market = $market;
		}

		public function getMarket() {
			return $this->market;
		}


		public function setMemberStatus($member_status) {
			$this->member_status = (int) $member_status;
		}

		public function getMemberStatus() {
			return (int) $this->member_status;
		}


		public function setIsFavorite($is_favorite) {
			$this->is_favorite = $is_favorite;
		}

		public function getIsFavorite() {
			return $this->is_favorite;
		}


		public function setIsSubscribed($is_subscribed) {
			$this->is_subscribed = $is_subscribed;
		}

		public function getIsSubscribed() {
			return $this->is_subscribed;
		}


		public function setCity($city) {
			$this->city = $city;
		}

		public function getCity() {
			return $this->city;
		}


		public function setCountry($country) {
			$this->country = $country;
		}

		public function getCountry() {
			return $this->country;
		}


		public function setVerified($verified) {
			$this->verified = $verified;
		}

		public function getVerified() {
			return $this->verified;
		}


		public function setDescription($description) {
			$this->description = $description;
		}

		public function getDescription() {
			return $this->description;
		}


		public function setWikiPage($wiki_page) {
			$this->wiki_page = $wiki_page;
		}

		public function getWikiPage() {
			return $this->wiki_page;
		}


		public function setMembersCount($members_count) {
			$this->members_count = (int) $members_count;
		}

		public function getMembersCount() {
			return (int) $this->members_count;
		}


		public function setCounters($counters) {
			$this->counters = $counters;
		}

		public function getCounters() {
			return $this->counters;
		}


		public function setCover($cover) {
			$this->cover = $cover;
		}

		public function getCover() {
			return $this->cover;
		}


		public function setCanPost($can_post) {
			$this->can_post = $can_post;
		}

		public function getCanPost() {
			return $this->can_post;
		}


		public function setCanSeeAllPosts($can_see_all_posts) {
			$this->can_see_all_posts = $can_see_all_posts;
		}

		public function getCanSeeAllPosts() {
			return $this->can_see_all_posts;
		}


		public function setActivity($activity) {
			$this->activity = $activity;
		}

		public function getActivity() {
			return $this->activity;
		}


		public function setFixedPost($fixed_post) {
			$this->fixed_post = (int) $fixed_post;
		}

		public function getFixedPost() {
			return (int) $this->fixed_post;
		}


		public function setCanCreateTopic($can_create_topic) {
			$this->can_create_topic = $can_create_topic;
		}

		public function getCanCreateTopic() {
			return $this->can_create_topic;
		}


		public function setCanUploadVideo($can_upload_video) {
			$this->can_upload_video = $can_upload_video;
		}

		public function getCanUploadVideo() {
			return $this->can_upload_video;
		}


		public function setHasPhoto($has_photo) {
			$this->has_photo = $has_photo;
		}

		public function getHasPhoto() {
			return $this->has_photo;
		}


		public function setStatus($status) {
			$this->status = $status;
		}

		public function getStatus() {
			return $this->status;
		}


		public function setMainAlbumId($main_album_id) {
			$this->main_album_id = (int) $main_album_id;
		}

		public function getMainAlbumId() {
			return (int) $this->main_album_id;
		}


		public function setLinks($links) {
			$this->links = (array) $links;
		}

		public function getLinks() {
			return (array) $this->links;
		}


		public function setContacts($contacts) {
			$this->contacts = (array) $contacts;
		}

		public function getContacts() {
			return (array) $this->contacts;
		}


		public function setSite($site) {
			$this->site = $site;
		}

		public function getSite() {
			return $this->site;
		}


		public function setMainSection($main_section) {
			$this->main_section = (int) $main_section;
		}

		public function getMainSection() {
			return (int) $this->main_section;
		}


		public function setTrending($trending) {
			$this->trending = $trending;
		}

		public function getTrending() {
			return $this->trending;
		}


		public function setCanMessage($can_message) {
			$this->can_message = $can_message;
		}

		public function getCanMessage() {
			return $this->can_message;
		}


		public function setIsMessagesAllowed($is_messages_allowed) {
			$this->is_messages_allowed = $is_messages_allowed;
		}

		public function getIsMessagesAllowed() {
			return $this->is_messages_allowed;
		}


		public function setStartDate($start_date) {
			$this->start_date = (int) $start_date;
		}

		public function getStartDate() {
			return (int) $this->start_date;
		}


		public function setFinishDate($finish_date) {
			$this->finish_date = (int) $finish_date;
		}

		public function getFinishDate() {
			return (int) $this->finish_date;
		}


		public function setAgeLimits($age_limits) {
			$this->age_limits = (int) $age_limits;
		}

		public function getAgeLimits() {
			return (int) $this->age_limits;
		}


		public function setBanInfo($ban_info) {
			$this->ban_info = $ban_info;
		}

		public function getBanInfo() {
			return $this->ban_info;
		}




	}
?>