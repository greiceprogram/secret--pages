<?php

if(isset($_POST['email'])) && !empty($_POST['email']){

$nome = addslashes ($_POST['name']));
$email = addslashes ($_POST['email']));
$mensagem = addslashes ($_POST['mesage']));


$to = "santana.gdev@gmail.com"; 
$subjet = "Contato blog pgs" ;

$body = "Nome: " .$nome. "\r\n".
        "E-mail: " .$email. "\r\n".
        "Mensagem: " .$mensagem;
$header = "From: santana.gdev@gmail.com"."\r\n.
 "Reply-To: ".$email. "\e\n".
 "X=Mailer:PHP/".phpversion();

if (mail($to,$subjet,$body,$header)){
    echo ("Email enviado com sucesso!");
}else{
    echo ("O Email não pode ser enviado");
}

}


?>