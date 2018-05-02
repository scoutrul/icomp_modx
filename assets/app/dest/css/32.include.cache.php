<?php
$to = 'feedback@icompliance.ru';

// $name = $_POST['fromName'];
// $tel = $_POST['tel'];
// $email = $_POST['email'];
// $theme = $_POST['subject'];
// $message = $_POST['message'];

if ( ! isset($email)) $email = 'noemail@mail.ma';
if ( ! isset($theme)) $theme = 'Без темы';
if ( ! isset($name)) $name = 'Без имени';
if ( ! isset($tel)) $tel = 'Без номаера телефона';
if ( ! isset($message)) $message = 'Без сообщения';

$message = rawurldecode($message);
$message = nl2br($message);

$body    = $modx->getChunk('mail_body', array('name' => $name, 'tel'=>$tel, 'email'=>$email, 'theme'=>$theme, 'message'=> $message ));

$modx->getService('mail', 'mail.modPHPMailer');
$modx->mail->setHTML(true);

$modx->mail->set(modMail::MAIL_BODY,      $body);
$modx->mail->set(modMail::MAIL_FROM,      $to);
$modx->mail->set(modMail::MAIL_FROM_NAME, $name);
$modx->mail->set(modMail::MAIL_SUBJECT,  'Комплаенс: сообщение с сайта');

$modx->mail->address('to', $to);
$modx->mail->address('reply-to', $email);

// $modx->log(modX::LOG_LEVEL_ERROR, 'before send');
// if ( ! $modx->mail->send()) {
//     $error = 'Ошибка при отправке E-mail на адрес '.$to;
//     $modx->setPlaceholder('error', $error);
//     $modx->log(modX::LOG_LEVEL_ERROR, $error.': '.$modx->mail->mailer->ErrorInfo);
// }
// $modx->log(modX::LOG_LEVEL_ERROR, 'after send');
$modx->mail->reset();
return;
