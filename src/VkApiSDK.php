<?php

	namespace VkApiSDK;
	use Closure;
	use VkApiSDK\Exception;
	use VkApiSDK\ApiTypes;
	use VkApiSDK\Method;


	
	class VkApiSDK {

		// Token 
		protected $token;
		
		// version 
		protected $version = '5.67';

		// curl
		protected $curl;

		// Url prefixes
		const URL_API = 'https://api.vk.com/method/';

		protected $method;

		public function __construct() {
			$this->method = new Method(); 
		}

		public function setToken($token) {
			$this->token = $token;
		}

		public function getToken() {
			return $this->token;
		}


		public function getVersion() {
			return $this->version;
		}


		public function Callback() {
			return $this->callback;
		}


		public function getUrl() {
			return self::URL_API;
		}

		// https://oauth.vk.com/blank.html&scope=friends&response_type=token&v=5.52

		public function getUrlAuthorize($params = array()) {
			return $url = "https://oauth.vk.com/authorize?" . http_build_query($params);
		}


		public function getAccessToken($client_id, $secret, $code, $redirect_uri) {

			$url = "https://oauth.vk.com/access_token?" . http_build_query([
				"client_id" 	=> $client_id,
				"client_secret" => $secret,
				"code" 			=> $code,
				"redirect_uri" 	=> $redirect_uri,
			]);


			$response = json_decode($this->curl($url), true);


			if (!$response || !isset($response['access_token'])) {
				throw new Exception("Invalid response for access_token request");
			}

			return $response;
		}

		public function Request($method, $params = array()) {
			$method_ = $this->method->get($method);

			if (!empty($method_['required'])) {
				$this->validate($params, $method_['required']);
			}



			$response = $this->call($method, $params);

			if (!empty($method_['response'])) {
				return  $method_['response']::fromResponse($response['response']);
			}
			return $response;
		}
		private function validate($data, $required) {	
			if (count(array_intersect_key(array_flip($required), $data)) === count($required)) {
				return true;
			}
			throw new Exception("Failed method validate");
		}

		public function call($method, array $params = null) {

			$params['access_token'] = $this->getToken();
			$params['v']			= $this->getVersion();
		
			$url = $this->getUrl() . $method .'?' . http_build_query($params);




			
			
			$response = json_decode($this->curl($url), true);


			if (!$response || !isset($response['response'])) {
				throw new Exception("Invalid response for {$method} request");
			}

			return $response;
		}



		private function curl($url) {
			$curl = curl_init($url);
			
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

			$json 	= curl_exec($curl);
			$error 	= curl_error($curl);

			
			if ($error) {
				throw new Exception("Failed request");
			}
			curl_close($curl);

			return $json;
		}

		public static function jsonValidate($jsonString, $asArray = true){

			$json = json_decode($jsonString, !$isarray);
			if (json_last_error() != JSON_ERROR_NONE) {
				throw new Exception(json_last_error_msg());
			}
			return $json;
		}
	}
