<?php

  include 'github_trim.php';

  $name = $_POST['name'];
  $subject = "Message From DB Website";
  $mailFrom = $_POST['number'];
  $message = $_POST['message'];
  $sender = "no-reply@daidasbeauty.co.za";

  $name_count = 0;
  $message_count = 0;
  $number_count = 0;

  $arr= array('leading');

  $name_count = strlen(trimWhitespace($name, $arr));
  $message_count = strlen(trimWhitespace($message, $arr));
  $number_count = strlen(trimWhitespace($mailFrom, $arr));

//&& filter_var($mailFrom, FILTER_VALIDATE_EMAIL)
  if (($name_count > 1)  && ($message_count > 1 ) && ($number_count > 1))
  {
    $mailTo = "vicky@daidasbeauty.co.za";
    $headers = "From: $sender";
    // $headers.= "MIME-Version: 1.0\r\n";
    // $headers.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    // $header.= "X-Priority: 1\r\n";
    $txt = "Message From:  \nFull Name: $name\n\n$message\n\nNumber: $mailFrom";



    try{  
    mail($mailTo, $subject, $txt, $headers);
    header("Location: https://daidasbeauty.co.za/index.html?MessageSent");
    }catch(Exception $e)
    {
      $errors = $e;
      echo $errors ."<br>";
    } 


    // if(mail($mailTo, $subject, $txt, $headers))
    // {
    //   header("Location: ./index.html?MessageSent");
    // }
    // else{
    //   $errors = "\nMail environment failure. \nPlease try again";
    //   echo $errors ."<br>";
   //}

  }
  else{
    header("Location: https://daidasbeauty.co.za/index.html?TryAgain");
  }