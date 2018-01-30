# VkApiSDK
<?php
include 'vendor/autoload.php';
if(true){
	error_reporting(E_ALL & ~(E_NOTICE | E_USER_NOTICE | E_DEPRECATED));
	ini_set('display_errors', 1);
}
try {
	$VkApiSDK = new \VkApiSDK\VkApiSDK();
	


	if (!empty(TOKEN)) {
		if (!empty($_GET['code'])) {
			$access_token = $VkApiSDK->getAccessToken(CLIENT, SECRET, $_GET['code'], redirect_uri)['access_token'];

		} else {
			echo $VkApiSDK->getUrlAuthorize([
				'client_id'		=> CLIENT,
				'redirect_uri'	=> redirect_uri,
				'scope' 		=> "offline,wall,photos,friends",
				'response_type'	=> 'code',
			]);
		}
	} else {
		$VkApiSDK->setToken(TOKEN);

		print_r($VkApiSDK->Request('users.get', [
			'owner_id'	=> '20513451',
		]));

		echo "\n";
	}
} catch (\VkApiSDK\Exception $error) {
    echo $error->getMessage();
}
