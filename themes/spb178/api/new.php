<?php

$error_message = ""; // в этой переменной будем хранить сообщения формы
$errors = array(); // контейнер для ошибок

$name = $_POST['name'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$textarea = $_POST['textarea'];
$ch = $_POST['ch'];

// проверяем корректность полей
if ($_POST['phone'] == "")
	$errors[] = "Поле не заполнено!";
// если форма без ошибок

if (empty($errors)) {
	if (!empty($name) && !empty($phone) && !empty($mail) && !empty($textarea)) {
		$message = 
		"<caption><b>" . $ch . "</b><br/><br/> </caption>";
		$message .= '<tr style="background-color: #f8f8f8;">'  . "
		<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Имя:</b></td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>". $name ."</td>
		</tr>";
		$message .= '<tr style="background-color: #f8f8f8;">'  . "
		<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Телефон:</b></td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>". $phone ."</td>
		</tr>";
		$message .= '<tr style="background-color: #f8f8f8;">'  . "
		<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Почта:</b></td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>". $mail ."</td>
		</tr>";
		$message .= '<tr style="background-color: #f8f8f8;">'  . "
		<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Комментарий:</b></td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>". $textarea ."</td>
		</tr>";

		$message = "<table style='width: 100%;'>$message</table>";
		send_mail($message);
		$error_message = "Сообщение успешно отправлено!";
	} else 
	if (!empty($name) && !empty($phone) && !empty($mail) && empty($textarea)) {
		$message = 
		"<caption><b>" . $ch . "</b><br/><br/> </caption>";
		$message .= '<tr style="background-color: #f8f8f8;">'  . "
		<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Имя:</b></td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>". $name ."</td>
		</tr>";
		$message .= '<tr style="background-color: #f8f8f8;">'  . "
		<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Телефон:</b></td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>". $phone ."</td>
		</tr>";
		$message .= '<tr style="background-color: #f8f8f8;">'  . "
		<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Почта:</b></td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>". $mail ."</td>
		</tr>";

		$message = "<table style='width: 100%;'>$message</table>";
		send_mail($message);
		$error_message = "Сообщение успешно отправлено!";
	} else 
	if (!empty($name) && !empty($phone) && empty($mail) && !empty($textarea)) {
		$message = 
		"<caption><b>" . $ch . "</b><br/><br/> </caption>";
		$message .= '<tr style="background-color: #f8f8f8;">'  . "
		<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Имя:</b></td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>". $name ."</td>
		</tr>";
		$message .= '<tr style="background-color: #f8f8f8;">'  . "
		<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Телефон:</b></td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>". $phone ."</td>
		</tr>";
		$message .= '<tr style="background-color: #f8f8f8;">'  . "
		<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Комментарий:</b></td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>". $textarea ."</td>
		</tr>";

		$message = "<table style='width: 100%;'>$message</table>";
		send_mail($message);
		$error_message = "Сообщение успешно отправлено!";
	} else 
	if (empty($name) && !empty($phone) && !empty($mail) && !empty($textarea)) {
		$message = 
		"<caption><b>" . $ch . "</b><br/><br/> </caption>";
		$message .= '<tr style="background-color: #f8f8f8;">'  . "
		<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Телефон:</b></td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>". $phone ."</td>
		</tr>";
		$message .= '<tr style="background-color: #f8f8f8;">'  . "
		<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Почта:</b></td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>". $mail ."</td>
		</tr>";
		$message .= '<tr style="background-color: #f8f8f8;">'  . "
		<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Комментарий:</b></td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>". $textarea ."</td>
		</tr>";

		$message = "<table style='width: 100%;'>$message</table>";
		send_mail($message);
		$error_message = "Сообщение успешно отправлено!";
	} 
	else 
	if (!empty($name) && !empty($phone) && empty($mail) && empty($textarea)) {
		$message = 
		"<caption><b>" . $ch . "</b><br/><br/> </caption>";
		$message .= '<tr style="background-color: #f8f8f8;">'  . "
		<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Имя:</b></td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>". $name ."</td>
		</tr>";
		$message .= '<tr style="background-color: #f8f8f8;">'  . "
		<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Телефон:</b></td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>". $phone ."</td>
		</tr>";

		$message = "<table style='width: 100%;'>$message</table>";
		send_mail($message);
		$error_message = "Сообщение успешно отправлено!";
	}
	else 
	if (empty($name) && !empty($phone) && !empty($mail) && empty($textarea)) {
		$message = 
		"<caption><b>" . $ch . "</b><br/><br/> </caption>";
		$message .= '<tr style="background-color: #f8f8f8;">'  . "
		<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Телефон:</b></td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>". $phone ."</td>
		</tr>";
		$message .= '<tr style="background-color: #f8f8f8;">'  . "
		<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Почта:</b></td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>". $mail ."</td>
		</tr>";

		$message = "<table style='width: 100%;'>$message</table>";
		send_mail($message);
		$error_message = "Сообщение успешно отправлено!";
	}
	else 
	if (empty($name) && !empty($phone) && empty($mail) && !empty($textarea)) {
		$message = 
		"<caption><b>" . $ch . "</b><br/><br/> </caption>";
		$message .= '<tr style="background-color: #f8f8f8;">'  . "
		<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Телефон:</b></td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>". $phone ."</td>
		</tr>";
		$message .= '<tr style="background-color: #f8f8f8;">'  . "
		<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Комментарий:</b></td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>". $textarea ."</td>
		</tr>";

		$message = "<table style='width: 100%;'>$message</table>";
		send_mail($message);
		$error_message = "Сообщение успешно отправлено!";
	}
	else 
	if (empty($name) && !empty($phone) && empty($mail) && empty($textarea)) {
		$message = 
		"<caption><b>" . $ch . "</b><br/><br/> </caption>";
		$message .= '<tr style="background-color: #f8f8f8;">'  . "
		<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Телефон:</b></td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>". $phone ."</td>
		</tr>";

		$message = "<table style='width: 100%;'>$message</table>";
		send_mail($message);
		$error_message = "Сообщение успешно отправлено!";
	}
} else {
	// если были ошибки, то выводим их
	$error_message = "ХХХ";
	foreach ($errors as $one_error) {
		$error_message .= "<span style='color: red;'>$one_error</span><br/>";
	}
}
// делаем ответ на клиентскую часть в формате JSON
echo json_encode(array(
	'result' => $error_message
));
// функция отправки письма
function send_mail($message)
{
	// почта, на которую придет письмо
	$mail_to = "spb178.com@yandex.ru"; 
	// тема письма
	$subject = "Лид";
	// заголовок письма
	$headers  = "MIME-Version: 1.0\r\n"; 
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "From: <spb178.com>\r\n";
	$headers .= "Reply-To: spb178.com@yandex.ru\r\n";
	// отправляем письмо
	mail($mail_to, $subject, $message, $headers);
}