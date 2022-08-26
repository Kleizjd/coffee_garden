<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'Libraries/phpmailer/Exception.php';
// require 'Libraries/phpmailer/PHPMailer.php';
// require 'Libraries/phpmailer/SMTP.php';

//Retorla la url del proyecto
function base_url()
{
    return BASE_URL;
}
//Retorla la url de Assets
function media()
{
    return BASE_URL.MEDIA;
    // return BASE_URL . MEDIA;
}
//Muestra información formateada
function dep($data)
{
    $format  = print_r('<pre>');
    $format .= print_r($data);
    $format .= print_r('</pre>');
    return $format;
}
// function getModal(string $nameModal, $data)
function getModal(string $nameModal)
{
    $view_modal = "../Web/Modals/{$nameModal}.php";
    require_once $view_modal;
}