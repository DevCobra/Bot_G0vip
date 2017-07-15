<?php

$botToken = ""; // توكن
$website = "https://api.telegram.org/bot".$botToken;
$sudo_id = 103810497; // ايدي المطور
$bot_id = 103810497;  // ايدي البوت
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$chatId = $update["message"]["chat"]["id"];
$action = $update["typing"];
$nm = $update["message"]["new_chat_member"];
$left = $update["message"]["left_chat_member"];
$type = $update["message"]["chat"]["type"];
$user = $update["message"]["from"]["username"];
$test = $update["message"]["contact"];
$numper = strlen($message);
$sticker = $update["message"]["sticker"];
$photo = $update["message"]["photo"];
$audio = $update["message"]["voice"];
$song = $update["message"]["audio"];
$nm = $update["message"]["new_chat_member"];
$pin = $update["message"]["pinned_message"];
$fwd = $update["message"]["forward_from"]["id"];
include "word.php";
$file = "word.php";
include "reply.php";
$memb = $update["message"]["message_id"];
$user = $update["message"]["from"]["username"];
$message = $update["message"]["text"];
$gif = $update["message"]["document"];
$reply = $update["message"]["reply_to_message"];
$np = $update["message"]["new_chat_photo"];
$dp = $update["message"]["delete_chat_photo"];
$for = $update["message"]["from"]["id"];
$replay = $update["message"]["reply_to_message"]["from"]["id"];
$video = $update["message"]["video"];
$replay_user = $update["message"]["reply_to_message"]["from"]["username"];
$number = str_word_count($message);
$str = 6;
$file_admin = "ids.php";
include "ids.php";
include "idst.php";
$start_id = "idst.php";


$users = count($start_ids);

if ($message == "المشتركين" && $for == $sudo_id){
sendmark($chatId, "عدد المشتركين هوة 🚹 : " . $users, $memb);
}


if($message == "/start" && !in_array($for, $start_ids)){
file_put_contents($start_id, "\n" . '$start_ids[] = ' . $for . ";", FILE_APPEND);
}

if ($reply && $replay != $bot_id && $message == "هيني"){
sendMessage($chatId, "دي لك زبالة 🌝😹 @" . $replay_user);
}

if ($reply && $replay == $bot_id && $message == "هيني"){
sendmark($chatId, "دي لك ماهين روحي 🌝😹", $memb);
}

if ($message == "/group"){
sendmark($chatId, "[كروب كلة بنات 😍💋 وبصمات لحك حيقبط 🏃](https://t.me/joinchat/AAAAAEJCDJymqW5woOGnpw)", $memb) ;
}

$matches = explode(".", $message); 
if($message){
sendMessage($matches[0], "$matches[1]");
}

$message != "<" && $message != ">" && $message != "'" && $message != ";" and $message != "#" and $message != "/";

$nor_name = explode(" ", $message);

if ($message == in_array($nor_n, $nor_name) && !$sticker && !$photo && !$audio && !$nm && !$fwd && !$gif && !$pin && !$test && !$left && !$video && !$np && !$dp && !$song){
sendaction($chatId, $action);
  sleep(2);
sendmark($chatId, $nor[$s], $memb);
}

if ($message == "/start" && $number < 6 && !in_array($message,$sex) && $type == "private"){
sendaction($chatId, $action);
  sleep(2);
sendmark($chatId, "ليش تسحف ؟ 😒😂 " , $memb);
}
if ($message != "/start" && $type == "private"){
sendaction($chatId, $action);
  sleep(2);
sendmark($chatId, $word[$rand], $memb);
}

if ($message == "منو حبيبج" or $message == "منو تحبين ؟" or $message == "تحبين منو ؟" or $message == "وينة حبيبج"){
sendaction($chatId, $action);
  sleep(2);
sendmark($chatId, "حبيبي ال عتابي موااح 😍💋" , $memb);
}



if($message && !in_array($message,$sex) && !in_array($message,$welc) && $message != "احبج" && $message != "نور" and $replay == $bot_id && !$photo && !$sticker && !$audio && !$nm && !$fwd && !$gif && !$pin && !$test && !$left && !$video && !$np && !$dp && !$song && !in_array($message , $sexs) && $message != "منو حبيبج" && $type != "private" && $message != "هيني"){
sendaction($chatId, $action);
  sleep(4);
sendmark($chatId, $word[$rand], $memb);
}

$arr = explode("'", $message);
$link = explode("https://", $message);
$tak = explode("@", $message);
$dot = explode(".", $message);
$sla = explode("/", $message);
$error = explode("  ", $message);

if ($message && in_array($message,$sla) && in_array($message,$dot) && in_array($message, $link) && in_array($message, $tak) && in_array($message, $arr) && $message != "نور" && $message != "احبج" && $number < $str && $message != $user && $message != "<" && $message != ">" && $message != "'" && $message != ";" and $message != "#" and $message != "/" && !$fwd && $chatId != -1001111061467){
file_put_contents($file, "\n".'$word[] = ' .  "'$message'" . ";",FILE_APPEND);
}


if ($message == in_array($message,$wel) && !$sticker && !$photo && !$audio && !$nm && !$fwd && !$gif && !$pin && !$test && !$left && !$video && !$np && !$dp && !$song){
sendaction($chatId, $action);
  sleep(2);
sendmark($chatId, "نورت حوبي 😍💋" ,$memb);
}

if ($message == "احبج" && $replay == 286788896 && !$sticker && !$photo && !$audio && $message && !$fwd && !$pin && !$test && !$left && !$np && !$dp && !$song){
sendaction($chatId, $action);
  sleep(2);
sendmark($chatId, $love[$rand_love], $memb);
}

if ($audio && !$nm && $fwd != $fwd && !$gif && !$pin && !$test && !$left && !$video && !$np && !$dp && !$song && !in_array("   ", $ex_c) ){
sendaction($chatId, $action);
  sleep(1);
sendmark($chatId, $vo[$rand_vo] ,$memb);
}

if ($message == "طردي" && $for == $sudo_id or $reply && $message == "طردي" && in_array($for, $ids)){
rekick($chatId,$for,$replay);
}

if ($message == "غادري" && $for == $sudo_id){
rekick($chatId,$for,$replay);
sendmark($chatId, "اوك باي 😢👏", $memb);
}

if($reply && $message == "طردي" && $for == $sudo_id or $reply && $message == "طردي" && in_array($for, $ids)){
sendmark($chatId, "تم طردت هاذ الوصخ 🌞☘"."[$replay_name](https://t.me/$replay_user)" , $memb);
}

if($reply && $message == "ادمن" && $for == $sudo_id){
file_put_contents($file_admin, "\n" . '$ids[] = ' . $replay . ";" ,FILE_APPEND);
}

if ($reply && $message == "ادمن" && $for == $sudo_id){
sendaction($chatId, $action);
  sleep(1);
sendmark($chatId, "حلوو صار ادمن بنورة 😍☘ : "."[$replay_name](https://t.me/$replay_user)",$memb);
}

function sendmark ($chatId, $message, $memb){

    $url = $GLOBALS[website].'/sendMessage?chat_id='.$chatId.'&parse_mode=Markdown'.'&text='.urlencode($message).'&reply_to_message_id='.$memb.'&disable_web_page_preview=true'.'&typing=true';
    file_get_contents($url);
     }

function rekick ($chatId, $for, $replay){
    $url = $GLOBALS[website].'/kickChatMember?chat_id='.$chatId.'&user_id='.$replay.'&text='.urlencode($message).'&reply_to_message_id='.$replay.'&disable_web_page_preview=true';
    file_get_contents($url);
     } 


function sendaction ($chatId, $action){
    $url = $GLOBALS[website].'/sendChatAction?chat_id='.$chatId.'&action=typing';
    file_get_contents($url);
     }

function sendMessage ($chatId, $message){
  

  $url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
  file_get_contents($url);
  }






ob_start();
define('API_KEY',''); // التوكن
$admin = "103810497";
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
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
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$editm = $update->edited_message;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$text1 = $message->text;
$fadmin = $message->from->id;
$file_o = DIR.'/users/'.$mid.'.json';
file_put_contents($file_o,json_encode($update->message->text));
chmod($file_o,0777);
if (isset($update->edited_message)){
  //$chat_id1 = $editm->chat->id;
  $eid = $editm->message_id;
  $edname = $editm->from->first_name;
  $jsu = json_decode(file_get_contents(__DIR__.'/users/'.$eid.'.json'));
  $text = "سحك وسوة تعديل 😹😹👆";
  $id = $update->edited_message->chat->id;
  bot('sendmessage',[
    'chat_id'=>$id,
    'reply_to_message_id'=>$eid,
    'text'=>$text,
    'parse_mode'=>'html'
  ]);
  $file_o = DIR.'/users/'.$eid.'.json';
  file_put_contents($file_o,json_encode($update->edited_message->text));
  //$up = file_get_contents(__DIR__.'/users/'.$eid.'.json');
  //str_replace("edited_message","message",$up);
}if($text1 == "المطور" or $text1== "/start"){
  $text = "مطور البوت 😍☘";
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$text,
    'reply_to_message_id'=>$message->message_id,
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
          ['text'=>'المطور 🕴','url'=>'https://telegram.me/G0vip']
        ],
      ]
    ])
  ]);
}
  

     ?>  