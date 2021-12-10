<?php
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $website = htmlspecialchars($_POST['website']);
  $message = htmlspecialchars($_POST['message']);

  if(!empty($email) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $receiver = "robsonrrn@gmail.com"; //insira aquele endereço de e-mail onde deseja receber todas as mensagens
      $subject = "From: $name <$email>";
      $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\n\nMessage:\n$message\n\nRegards,\n$name";
      $sender = "From: $email";
      if(mail($receiver, $subject, $body, $sender)){
         echo "Sua mensagem foi enviada";
      }else{
         echo "Desculpe, falha ao enviar sua mensagem!";
      }
    }else{
      echo "Digite um endereço de e-mail válido!";
    }
  }else{
    echo "Os campos de e-mail e mensagem são obrigatórios!";
  }
?>
