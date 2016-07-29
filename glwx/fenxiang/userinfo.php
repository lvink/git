<?php
//检测并返回当前用户是否关注指定公众号
class CHECKUSER{
	private $AppId;
	private $AppSecret;
	private $Access_Token;
	private $code;
	
	public function __construct($appId, $appSecret, $Access_Token, $code) {
		$this->appId = $appId;
		$this->appSecret = $appSecret;
		$this->Access_Token = $Access_Token;
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

	private function GetOpenId(){
		//code 换 openid
		$url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$this->appId."&code=".$this->code."&grant_type=authorization_code";
		$json = $this->httpGet($url);
		$data = json_decode($json, true);
		$openid = $data['openid'];
		$access_token  = $data['access_token'];//这个值仅仅是用来获取详细用户信息的,不是公众号的token
		$refresh_token  = $data['refresh_token'];
		return array("openid"=>$openid,"access_token"=>$access_token);
	}
	
	public function GetUserInfo(){
		//openid 换 详细信息
		$getopenid = $this->GetOpenId();
		$url = "https://api.weixin.qq.com/sns/userinfo?access_token=".$getopenid['access_token']."&openid=".$getopenid['openid']."&lang=zh_CN";
		$json= httpGet($url);
		$data = json_decode($json, true);
		return $data;
	}
	
	public function CheckUser(){
		//获取指定的公众号关注列表
		$getopenid = $this->GetOpenId();
		$url = "https://api.weixin.qq.com/cgi-bin/user/get?access_token=$this->Access_Token&next_openid=";
		$json = $this->httpGet($url);
		$data = json_decode($json, true);
		$userlist = $data['data']['openid'];
		$count = $data['count'];
		//没有递归查询所有用户信息,理论上我觉得没有号会超过2w用户,主要怕数据太多php挂......
		if($count > 10000){
			$url = $url.$data['next_openid'];
			$json = httpGet($url);
			$data = json_decode($json, true);
			$userlist = array_merge($userlist ,$data['data']['openid']);
		}
		//检测关注
		if(!in_array($getopenid['openid'],$userlist)){
			return json_encode(array("err"=>"1"));//未关注
		}else{
			$_SESSION['wxopenid'] = $data2['openid'];//保存用户信息
			
			return json_encode(array("err"=>"0"));
		}
	}
}


?>