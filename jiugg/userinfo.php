<?php
//检测并返回当前用户是否关注指定公众号
class CHECKUSER{
	private $AppId;
	private $AppSecret;
	private $code;
	
	public function __construct($appId, $appSecret, $code) {
		$this->appId = $appId;
		$this->appSecret = $appSecret;
		$this->code = $code;
	}
	
	private function httpGet($url) {
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_TIMEOUT, 500);
		curl_setopt($curl, CURLOPT_URL, $url);
		$res = curl_exec($curl);
		curl_close($curl);
		return $res;
	}

	 private function getAccessToken() {
		// access_token 应该全局存储与更新，以下代码以写入到文件中做示例
		$data = json_decode(file_get_contents("../glwx/access_token.json"));
		if ($data->expire_time < time()) {
		  $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$this->appId&secret=$this->appSecret";
		  $res = json_decode($this->httpGet($url));
		  $access_token = $res->access_token;
		  if ($access_token) {
			$data->expire_time = time() + 300;
			$data->access_token = $access_token;
			$fp = fopen("../glwx/access_token.json", "w");
			fwrite($fp, json_encode($data));
			fclose($fp);
		  }
		} else {
		  $access_token = $data->access_token;
		}
		return $access_token;
	  }
	  
	private function GetOpenId(){
		//code 换 openid
		$url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$this->appId."&secret=".$this->appSecret."&code=".$this->code."&grant_type=authorization_code";
		$json = $this->httpGet($url);
		$data = json_decode($json, true); 
		$openid = $data['openid'];
		$access_token  = $data['access_token'];//这个值仅仅是用来获取详细用户信息的,不是公众号的token
		$refresh_token  = $data['refresh_token'];
		return array("openid"=>$openid,"access_token"=>$access_token);
	}
	
	public function CheckUser(){
		//openid 换 详细信息
		$getopenid = $this->GetOpenId();
		$url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=".$this->getAccessToken()."&openid=".$getopenid['openid']."&lang=zh_CN";
//		$url = "https://api.weixin.qq.com/sns/userinfo?access_token=".$getopenid['access_token']."&openid=".$getopenid['openid']."&lang=zh_CN";
		$json= $this->httpGet($url);
		$data = json_decode($json, true);
			if($data['subscribe']==1){
				$_SESSION['sdj'] = $getopenid['openid'];
			}else{
				unset ($_SESSION['sdj']);
			}
		
		//return $data['subscribe'];
	}
	
}


?>