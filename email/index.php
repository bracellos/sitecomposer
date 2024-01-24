<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require_once __DIR__."/../vendor/autoload.php";


$m = new PHPMailer();
$m->SMTPDebug = SMTP::DEBUG_SERVER;
$m->isSMTP();
$m->Host = "sandbox.smtp.mailtrap.io";
$m->SMTPAuth = true;
$m->Username = "2046e881e69edc";
$m->Password = "c7a5b4fcce9287";
$m->Port = 2525;

//configuração da mensagem
$m->CharSet = PHPMailer::CHARSET_UTF8;
$m->setFrom("bracellos@gmail.com", "Diego");
$m->addAddress("cafepradev@gmail.com");
$m->isHTML(true);
$m->Subject = "Increva-se no canal Café pra DEV";
$m->Body = <<<HTML
    <h1>Porquê você ainda não se inscreveu no canal?</h1>
    <p>Você está perdendo tempo nego.</p>
    <a href="https://youtube.com/@cafepradev">INCREVER-SE</a>
HTML;

if($m->send()){
    echo "Mensagem foi enviada";
}else{
    echo $m->ErrorInfo;
}