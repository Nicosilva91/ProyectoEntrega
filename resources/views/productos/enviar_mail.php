<?php

$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$email_form = $_POST['email'];
$texto_form = $_POST['texto'];

$cuerpo_mail = "Nombre: " .$nombre_form. "\r\n" . "Apellido: " .$apellido_form. "\r\n"
. "email: ".$email_form . "\r\n" . "texto: ".$texto_form;

mail("nicolasleandrosilva91@gmail.com", "Mensaje enviado desde la web", "$cuerpo_mail");

header("Location : formulario.php?e=ok");