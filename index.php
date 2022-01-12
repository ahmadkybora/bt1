<?php
/**
 * در این قسمت یک کوئری ایجاد شده است بوسیله
 * ریکوایر کردن فایل کانکشن و همیطور که میبینید به متغییر
 * pdo
 *  دسترسی داریم و میتوانیم
 * کویری بزنیم
 */
// require_once("./db.php");
// $stmt = $pdo->query('SELECT username FROM users');
// while ($row = $stmt->fetch())
// {
//     echo $row['username'] . "\n";
// }

// define('TOKEN', '2016260844:AAGwWwI6ZLA7cLUNNcAbbFz2W84wkJebZyo');
// define('API', 'https://api.telegram.org/bot' . TOKEN);

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

