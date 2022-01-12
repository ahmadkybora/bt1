<?php
/**
 * در این قسمت یک کوئری ایجاد شده است بوسیله
 * ریکوایر کردن فایل کانکشن و همیطور که میبینید به متغییر
 * pdo
 *  دسترسی داریم و میتوانیم
 * کویری بزنیم
 */

require_once("./db.php");
// require_once("./Connection.php");
/**
 * استفاده از متد 
 * query
 * برایاجرای کویری ها
 * و همچنین متد 
 * fetch
 * داده های مورد نظر را
 * تبدیل به یک آرایه
 * انجمنی میکند
 */
// $stmt = $pdo->query('SELECT * FROM users WHERE id=2')->fetch();
// echo $stmt['username'];
// var_dump($stmt->fetch());
// while ($row = $stmt->fetch())
// {
//     echo $row['username'] . "\n";
// }

define('TOKEN', '2016260844:AAGwWwI6ZLA7cLUNNcAbbFz2W84wkJebZyo');
define('API', 'https://api.telegram.org/bot' . TOKEN);

// $content = file_get_contents("php://input");
// $update = json_decode($content, true);


// $chat_id = 137444694;
// $text = 'This is my message !!!';

// $params=[
//     'chat_id'=>$chat_id, 
//     'text'=>'This is my message !!!',
// ];

// $ch = curl_init(API . '/sendMessage');
// curl_setopt($ch, CURLOPT_HEADER, false);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// $result = curl_exec($ch);
// echo $result;
// curl_close($ch);

// $url = API;
//  function sendMessage($url, $chat_id, $text) {
//     //  echo "is Send";
//         $url . '/sendMessage?chat_id=' . $chat_id . '&text=' . $text;
//         // var_dump($url);
//         // // die();
//         // $ch = curl_init();
//         // $optArray = array(
//         //         CURLOPT_URL => $url,
//         //         CURLOPT_RETURNTRANSFER => true
//         // );
//         // curl_setopt_array($ch, $optArray);
//         // $result = curl_exec($ch);
//         // curl_close($ch);
//         return $url;
//  }
//  sendMessage($url, $chat_id, $text);

// function sendMessage($chatID, $messaggio, $token) {
//     echo "sending message to " . $chatID . "\n";

//     $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatID;
//     $url = $url . "&text=" . urlencode($messaggio);
//     $ch = curl_init();
//     $optArray = array(
//             CURLOPT_URL => $url,
//             CURLOPT_RETURNTRANSFER => true
//     );
//     curl_setopt_array($ch, $optArray);
//     $result = curl_exec($ch);
//     curl_close($ch);
//     return $result;
// }



// var_dump($chatId);
// echo $update['message']['chat']['id'];
// $ch = curl_init(API . '/sendMessage');
// curl_setopt($ch, CURLOPT_HEADER, false);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// $result = curl_exec($ch);
// curl_close($ch);

// function Bot($method,$datas=[]){
    
//     $url = API . "/" . $method;
//     $ch = curl_init();
//     curl_setopt($ch,CURLOPT_URL,$url);
//     curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
//     curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
//     curl_setopt($ch,CURLOPT_TIMEOUT,3000);
//     $res = curl_exec($ch);
//     if(curl_error($ch)){
//         var_dump(curl_error($ch));
//     }else{

//         return json_decode($res,true);

//     }
// }

// Bot('sendMessage', ['?chat_id=137444694&test=hello']);

// ini_set('error_reporting', 'E_ALL');
// $botToken = "2016260844:AAGwWwI6ZLA7cLUNNcAbbFz2W84wkJebZyo";
// $webSite = "https://api.telegram.org/bot" . $botToken;
// $update = file_get_contents("php://input");
// $update = json_decode($update, TRUE);
// $chatId = 137444694;
// $message = "sa";

// //CustomKeyBord
// $option = array(array("salam", "Key1"), array("key2", "key3"));

// $replyMarkup = array(
//  'keyboard' => $option,
//  'one_time_keyboard' => false,
//  'resize_keyboard' => true,
//  'selective' => true
// );

// $encodedMarkup = json_encode($replyMarkup, true);

// function sendMessage($chatId, $message, $r)
// {
//  $url = $GLOBALS['webSite'] . "/sendMessage?chat_id=" . $chatId . "&text=" . urlencode($message) . "&reply_markup=" . $r;
//  file_get_contents($url);
// }

// switch ($message) {
//  case "/start":
//  sendMessage($chatId, "شروع می کنیم", $encodedMarkup);
//  break;
//  case "salam":
//  sendMessage($chatId, "salam be ruye mahet", $encodedMarkup);
//  break;
//  default:
//  sendMessage($chatId, "chi migi ??", $encodedMarkup);
// }


// $curl = curl_init();
// 	curl_setopt($curl,CURLOPT_URL, API . "/getMe");
// 	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
// 	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// 	$json=curl_exec($curl);
// 	$obj = json_decode($json);
// 	die($obj->result->username) ;

$chatId=137444694;
$text='متن پیغام مورد نظر';
$sendResponseUrl = API . '/sendMessage?chat_id='.$chatId.'&text='.$text;

file_get_contents($sendResponseUrl);