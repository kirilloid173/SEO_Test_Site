<?php
$name = $_POST['name_name'];
$phone = $_POST['name_phone'];
$text = "Пришла новая заявка с сайта.\nИмя -> ".$name."\nНомер телефона -> ".$phone;
$text = wordwrap($text, 70, "\r\n");
mail('kirilloid173@gmail.com', 'Title_test', $text);
header("Location: http://kiril20o.beget.tech/");
?>