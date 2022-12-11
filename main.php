<?php

$to = 'fairycakeskira@gmail.com';

$user_name = $_POST['user_name'];
$user_phone = $_POST['user_phone'];
$user_wish = $_POST['user_wish'];
$kg_button = $_POST['kg_button'];
$select_filling = $_POST['select_filling'];
$result = $_POST['result'];

echo  $user_name, ' ', $user_phone;

// $subject = 'У тебя новый заказ!';

// $message = $user_name . ',' . $user_phone . ',' . $user_wish . ',' . $kg_button . ',' . $select_filling . ',' . $result;

// // Для отправки HTML-письма должен быть установлен заголовок Content-type
// $headers  = 'MIME-Version: 1.0' . "\r\n";
// $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// // Дополнительные заголовки
// $headers .= 'To: Иван <Ivan@example.com>' . "\r\n"; // Свое имя и email
// $headers .= 'From: '  . $_POST['name'] . '<' . $_POST['email'] . '>' . "\r\n";

// mail($to, $subject, $message, $headers);

?>