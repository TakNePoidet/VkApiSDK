<?php

	namespace VkApiSDK\ApiTypes\Users;

	use VkApiSDK\BaseType;
	use VkApiSDK\ApiTypes;



	class UserXtrCounters extends BaseType {

		protected static $requiredParams = [];


		protected static $map = [
			'id' 	 => true,
			'first_name' 	 => true,
			'last_name' 	 => true,
			'deactivated' 	 => true,
			'hidden' 	 => true,
			'sex' 	 => ApiTypes\Base\Sex::class,
			'screen_name' 	 => true,
			'photo_50' 	 => true,
			'photo_100' 	 => true,
			'online' 	 => ApiTypes\Base\BoolInt::class,
			'online_mobile' 	 => ApiTypes\Base\BoolInt::class,
			'online_app' 	 => true,
			'nickname' 	 => true,
			'maiden_name' 	 => true,
			'domain' 	 => true,
			'bdate' 	 => true,
			'city' 	 => ApiTypes\Base\Object::class,
			'country' 	 => ApiTypes\Base\Country::class,
			'timezone' 	 => true,
			'photo_200' 	 => true,
			'photo_max' 	 => true,
			'photo_200_orig' 	 => true,
			'photo_400_orig' 	 => true,
			'photo_max_orig' 	 => true,
			'photo_id' 	 => true,
			'has_photo' 	 => ApiTypes\Base\BoolInt::class,
			'trending' 	 => ApiTypes\Base\BoolInt::class,
			'has_mobile' 	 => ApiTypes\Base\BoolInt::class,
			'is_friend' 	 => ApiTypes\Base\BoolInt::class,
			'friend_status' 	 => true,
			'wall_comments' 	 => ApiTypes\Base\BoolInt::class,
			'can_post' 	 => ApiTypes\Base\BoolInt::class,
			'can_see_all_posts' 	 => ApiTypes\Base\BoolInt::class,
			'can_see_audio' 	 => ApiTypes\Base\BoolInt::class,
			'can_write_private_message' 	 => ApiTypes\Base\BoolInt::class,
			'can_send_friend_request' 	 => ApiTypes\Base\BoolInt::class,
			'mobile_phone' 	 => true,
			'home_phone' 	 => true,
			'skype' 	 => true,
			'facebook' 	 => true,
			'facebook_name' 	 => true,
			'twitter' 	 => true,
			'livejournal' 	 => true,
			'instagram' 	 => true,
			'site' 	 => true,
			'status_audio' 	 => ApiTypes\Audio\AudioFull::class,
			'status' 	 => true,
			'activity' 	 => true,
			'last_seen' 	 => ApiTypes\Users\LastSeen::class,
			'exports' 	 => ApiTypes\Users\Exports::class,
			'crop_photo' 	 => ApiTypes\Users\CropPhoto::class,
			'verified' 	 => ApiTypes\Base\BoolInt::class,
			'followers_count' 	 => true,
			'blacklisted' 	 => ApiTypes\Base\BoolInt::class,
			'blacklisted_by_me' 	 => ApiTypes\Base\BoolInt::class,
			'is_favorite' 	 => ApiTypes\Base\BoolInt::class,
			'is_hidden_from_feed' 	 => ApiTypes\Base\BoolInt::class,
			'common_count' 	 => true,
			'occupation' 	 => ApiTypes\Users\Occupation::class,
			'career' 	 => array(ApiTypes\Users\Career::class),
			'military' 	 => array(ApiTypes\Users\Military::class),
			'university' 	 => true,
			'university_name' 	 => true,
			'faculty' 	 => true,
			'faculty_name' 	 => true,
			'graduation' 	 => true,
			'education_form' 	 => true,
			'education_status' 	 => true,
			'home_town' 	 => true,
			'relation' 	 => true,
			'relation_partner' 	 => ApiTypes\Users\UserMin::class,
			'personal' 	 => ApiTypes\Users\Personal::class,
			'interests' 	 => true,
			'music' 	 => true,
			'activities' 	 => true,
			'movies' 	 => true,
			'tv' 	 => true,
			'books' 	 => true,
			'games' 	 => true,
			'universities' 	 => array(ApiTypes\Users\University::class),
			'schools' 	 => array(ApiTypes\Users\School::class),
			'about' 	 => true,
			'relatives' 	 => array(ApiTypes\Users\Relative::class),
			'quotes' 	 => true,
			'counters' 	 => ApiTypes\Users\UserCounters::class,
		];


		protected $id;
		protected $first_name;
		protected $last_name;
		protected $deactivated;
		protected $hidden;
		protected $sex;
		protected $screen_name;
		protected $photo_50;
		protected $photo_100;
		protected $online;
		protected $online_mobile;
		protected $online_app;
		protected $nickname;
		protected $maiden_name;
		protected $domain;
		protected $bdate;
		protected $city;
		protected $country;
		protected $timezone;
		protected $photo_200;
		protected $photo_max;
		protected $photo_200_orig;
		protected $photo_400_orig;
		protected $photo_max_orig;
		protected $photo_id;
		protected $has_photo;
		protected $trending;
		protected $has_mobile;
		protected $is_friend;
		protected $friend_status;
		protected $wall_comments;
		protected $can_post;
		protected $can_see_all_posts;
		protected $can_see_audio;
		protected $can_write_private_message;
		protected $can_send_friend_request;
		protected $mobile_phone;
		protected $home_phone;
		protected $skype;
		protected $facebook;
		protected $facebook_name;
		protected $twitter;
		protected $livejournal;
		protected $instagram;
		protected $site;
		protected $status_audio;
		protected $status;
		protected $activity;
		protected $last_seen;
		protected $exports;
		protected $crop_photo;
		protected $verified;
		protected $followers_count;
		protected $blacklisted;
		protected $blacklisted_by_me;
		protected $is_favorite;
		protected $is_hidden_from_feed;
		protected $common_count;
		protected $occupation;
		protected $career;
		protected $military;
		protected $university;
		protected $university_name;
		protected $faculty;
		protected $faculty_name;
		protected $graduation;
		protected $education_form;
		protected $education_status;
		protected $home_town;
		protected $relation;
		protected $relation_partner;
		protected $personal;
		protected $interests;
		protected $music;
		protected $activities;
		protected $movies;
		protected $tv;
		protected $books;
		protected $games;
		protected $universities;
		protected $schools;
		protected $about;
		protected $relatives;
		protected $quotes;
		protected $counters;


		public function setId($id) {
			$this->id = (int) $id;
		}

		public function getId() {
			return (int) $this->id;
		}


		public function setFirstName($first_name) {
			$this->first_name = $first_name;
		}

		public function getFirstName() {
			return $this->first_name;
		}


		public function setLastName($last_name) {
			$this->last_name = $last_name;
		}

		public function getLastName() {
			return $this->last_name;
		}


		public function setDeactivated($deactivated) {
			$this->deactivated = $deactivated;
		}

		public function getDeactivated() {
			return $this->deactivated;
		}


		public function setHidden($hidden) {
			$this->hidden = (int) $hidden;
		}

		public function getHidden() {
			return (int) $this->hidden;
		}


		public function setSex($sex) {
			$this->sex = $sex;
		}

		public function getSex() {
			return $this->sex;
		}


		public function setScreenName($screen_name) {
			$this->screen_name = $screen_name;
		}

		public function getScreenName() {
			return $this->screen_name;
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


		public function setOnline($online) {
			$this->online = $online;
		}

		public function getOnline() {
			return $this->online;
		}


		public function setOnlineMobile($online_mobile) {
			$this->online_mobile = $online_mobile;
		}

		public function getOnlineMobile() {
			return $this->online_mobile;
		}


		public function setOnlineApp($online_app) {
			$this->online_app = (int) $online_app;
		}

		public function getOnlineApp() {
			return (int) $this->online_app;
		}


		public function setNickname($nickname) {
			$this->nickname = $nickname;
		}

		public function getNickname() {
			return $this->nickname;
		}


		public function setMaidenName($maiden_name) {
			$this->maiden_name = $maiden_name;
		}

		public function getMaidenName() {
			return $this->maiden_name;
		}


		public function setDomain($domain) {
			$this->domain = $domain;
		}

		public function getDomain() {
			return $this->domain;
		}


		public function setBdate($bdate) {
			$this->bdate = $bdate;
		}

		public function getBdate() {
			return $this->bdate;
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


		public function setTimezone($timezone) {
			$this->timezone = (int) $timezone;
		}

		public function getTimezone() {
			return (int) $this->timezone;
		}


		public function setPhoto200($photo_200) {
			$this->photo_200 = $photo_200;
		}

		public function getPhoto200() {
			return $this->photo_200;
		}


		public function setPhotoMax($photo_max) {
			$this->photo_max = $photo_max;
		}

		public function getPhotoMax() {
			return $this->photo_max;
		}


		public function setPhoto200Orig($photo_200_orig) {
			$this->photo_200_orig = $photo_200_orig;
		}

		public function getPhoto200Orig() {
			return $this->photo_200_orig;
		}


		public function setPhoto400Orig($photo_400_orig) {
			$this->photo_400_orig = $photo_400_orig;
		}

		public function getPhoto400Orig() {
			return $this->photo_400_orig;
		}


		public function setPhotoMaxOrig($photo_max_orig) {
			$this->photo_max_orig = $photo_max_orig;
		}

		public function getPhotoMaxOrig() {
			return $this->photo_max_orig;
		}


		public function setPhotoId($photo_id) {
			$this->photo_id = $photo_id;
		}

		public function getPhotoId() {
			return $this->photo_id;
		}


		public function setHasPhoto($has_photo) {
			$this->has_photo = $has_photo;
		}

		public function getHasPhoto() {
			return $this->has_photo;
		}


		public function setTrending($trending) {
			$this->trending = $trending;
		}

		public function getTrending() {
			return $this->trending;
		}


		public function setHasMobile($has_mobile) {
			$this->has_mobile = $has_mobile;
		}

		public function getHasMobile() {
			return $this->has_mobile;
		}


		public function setIsFriend($is_friend) {
			$this->is_friend = $is_friend;
		}

		public function getIsFriend() {
			return $this->is_friend;
		}


		public function setFriendStatus($friend_status) {
			$this->friend_status = (int) $friend_status;
		}

		public function getFriendStatus() {
			return (int) $this->friend_status;
		}


		public function setWallComments($wall_comments) {
			$this->wall_comments = $wall_comments;
		}

		public function getWallComments() {
			return $this->wall_comments;
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


		public function setCanSeeAudio($can_see_audio) {
			$this->can_see_audio = $can_see_audio;
		}

		public function getCanSeeAudio() {
			return $this->can_see_audio;
		}


		public function setCanWritePrivateMessage($can_write_private_message) {
			$this->can_write_private_message = $can_write_private_message;
		}

		public function getCanWritePrivateMessage() {
			return $this->can_write_private_message;
		}


		public function setCanSendFriendRequest($can_send_friend_request) {
			$this->can_send_friend_request = $can_send_friend_request;
		}

		public function getCanSendFriendRequest() {
			return $this->can_send_friend_request;
		}


		public function setMobilePhone($mobile_phone) {
			$this->mobile_phone = $mobile_phone;
		}

		public function getMobilePhone() {
			return $this->mobile_phone;
		}


		public function setHomePhone($home_phone) {
			$this->home_phone = $home_phone;
		}

		public function getHomePhone() {
			return $this->home_phone;
		}


		public function setSkype($skype) {
			$this->skype = $skype;
		}

		public function getSkype() {
			return $this->skype;
		}


		public function setFacebook($facebook) {
			$this->facebook = $facebook;
		}

		public function getFacebook() {
			return $this->facebook;
		}


		public function setFacebookName($facebook_name) {
			$this->facebook_name = $facebook_name;
		}

		public function getFacebookName() {
			return $this->facebook_name;
		}


		public function setTwitter($twitter) {
			$this->twitter = $twitter;
		}

		public function getTwitter() {
			return $this->twitter;
		}


		public function setLivejournal($livejournal) {
			$this->livejournal = $livejournal;
		}

		public function getLivejournal() {
			return $this->livejournal;
		}


		public function setInstagram($instagram) {
			$this->instagram = $instagram;
		}

		public function getInstagram() {
			return $this->instagram;
		}


		public function setSite($site) {
			$this->site = $site;
		}

		public function getSite() {
			return $this->site;
		}


		public function setStatusAudio($status_audio) {
			$this->status_audio = $status_audio;
		}

		public function getStatusAudio() {
			return $this->status_audio;
		}


		public function setStatus($status) {
			$this->status = $status;
		}

		public function getStatus() {
			return $this->status;
		}


		public function setActivity($activity) {
			$this->activity = $activity;
		}

		public function getActivity() {
			return $this->activity;
		}


		public function setLastSeen($last_seen) {
			$this->last_seen = $last_seen;
		}

		public function getLastSeen() {
			return $this->last_seen;
		}


		public function setExports($exports) {
			$this->exports = $exports;
		}

		public function getExports() {
			return $this->exports;
		}


		public function setCropPhoto($crop_photo) {
			$this->crop_photo = $crop_photo;
		}

		public function getCropPhoto() {
			return $this->crop_photo;
		}


		public function setVerified($verified) {
			$this->verified = $verified;
		}

		public function getVerified() {
			return $this->verified;
		}


		public function setFollowersCount($followers_count) {
			$this->followers_count = (int) $followers_count;
		}

		public function getFollowersCount() {
			return (int) $this->followers_count;
		}


		public function setBlacklisted($blacklisted) {
			$this->blacklisted = $blacklisted;
		}

		public function getBlacklisted() {
			return $this->blacklisted;
		}


		public function setBlacklistedByMe($blacklisted_by_me) {
			$this->blacklisted_by_me = $blacklisted_by_me;
		}

		public function getBlacklistedByMe() {
			return $this->blacklisted_by_me;
		}


		public function setIsFavorite($is_favorite) {
			$this->is_favorite = $is_favorite;
		}

		public function getIsFavorite() {
			return $this->is_favorite;
		}


		public function setIsHiddenFromFeed($is_hidden_from_feed) {
			$this->is_hidden_from_feed = $is_hidden_from_feed;
		}

		public function getIsHiddenFromFeed() {
			return $this->is_hidden_from_feed;
		}


		public function setCommonCount($common_count) {
			$this->common_count = (int) $common_count;
		}

		public function getCommonCount() {
			return (int) $this->common_count;
		}


		public function setOccupation($occupation) {
			$this->occupation = $occupation;
		}

		public function getOccupation() {
			return $this->occupation;
		}


		public function setCareer($career) {
			$this->career = (array) $career;
		}

		public function getCareer() {
			return (array) $this->career;
		}


		public function setMilitary($military) {
			$this->military = (array) $military;
		}

		public function getMilitary() {
			return (array) $this->military;
		}


		public function setUniversity($university) {
			$this->university = (int) $university;
		}

		public function getUniversity() {
			return (int) $this->university;
		}


		public function setUniversityName($university_name) {
			$this->university_name = $university_name;
		}

		public function getUniversityName() {
			return $this->university_name;
		}


		public function setFaculty($faculty) {
			$this->faculty = (int) $faculty;
		}

		public function getFaculty() {
			return (int) $this->faculty;
		}


		public function setFacultyName($faculty_name) {
			$this->faculty_name = $faculty_name;
		}

		public function getFacultyName() {
			return $this->faculty_name;
		}


		public function setGraduation($graduation) {
			$this->graduation = (int) $graduation;
		}

		public function getGraduation() {
			return (int) $this->graduation;
		}


		public function setEducationForm($education_form) {
			$this->education_form = $education_form;
		}

		public function getEducationForm() {
			return $this->education_form;
		}


		public function setEducationStatus($education_status) {
			$this->education_status = $education_status;
		}

		public function getEducationStatus() {
			return $this->education_status;
		}


		public function setHomeTown($home_town) {
			$this->home_town = $home_town;
		}

		public function getHomeTown() {
			return $this->home_town;
		}


		public function setRelation($relation) {
			$this->relation = (int) $relation;
		}

		public function getRelation() {
			return (int) $this->relation;
		}


		public function setRelationPartner($relation_partner) {
			$this->relation_partner = $relation_partner;
		}

		public function getRelationPartner() {
			return $this->relation_partner;
		}


		public function setPersonal($personal) {
			$this->personal = $personal;
		}

		public function getPersonal() {
			return $this->personal;
		}


		public function setInterests($interests) {
			$this->interests = $interests;
		}

		public function getInterests() {
			return $this->interests;
		}


		public function setMusic($music) {
			$this->music = $music;
		}

		public function getMusic() {
			return $this->music;
		}


		public function setActivities($activities) {
			$this->activities = $activities;
		}

		public function getActivities() {
			return $this->activities;
		}


		public function setMovies($movies) {
			$this->movies = $movies;
		}

		public function getMovies() {
			return $this->movies;
		}


		public function setTv($tv) {
			$this->tv = $tv;
		}

		public function getTv() {
			return $this->tv;
		}


		public function setBooks($books) {
			$this->books = $books;
		}

		public function getBooks() {
			return $this->books;
		}


		public function setGames($games) {
			$this->games = $games;
		}

		public function getGames() {
			return $this->games;
		}


		public function setUniversities($universities) {
			$this->universities = (array) $universities;
		}

		public function getUniversities() {
			return (array) $this->universities;
		}


		public function setSchools($schools) {
			$this->schools = (array) $schools;
		}

		public function getSchools() {
			return (array) $this->schools;
		}


		public function setAbout($about) {
			$this->about = $about;
		}

		public function getAbout() {
			return $this->about;
		}


		public function setRelatives($relatives) {
			$this->relatives = (array) $relatives;
		}

		public function getRelatives() {
			return (array) $this->relatives;
		}


		public function setQuotes($quotes) {
			$this->quotes = $quotes;
		}

		public function getQuotes() {
			return $this->quotes;
		}


		public function setCounters($counters) {
			$this->counters = $counters;
		}

		public function getCounters() {
			return $this->counters;
		}




	}
?>