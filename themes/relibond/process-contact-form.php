<?php

  $response = "";

  function formValidationResponse( $type, $message ) {

    global $response;

    if ($type == "success") $response = "<div class='page-contactAndJobs_form_message-succes'>{$message}</div>";
    else $response = "<div class='page-contactAndJobs_form_message-error'>{$message}</div>";

  }

  $not_human       = "Human verification is incorrect";
  $missing_content = "Some required information is missing";
  $email_invalid   = "The email doesn't seem to be an email";
  $message_unsent  = "We couldn't send the mail. Please try again.";
  $message_sent    = "Thanks for your message!";

  $mail = '';
  $subject = '';
  if(isset($_POST['name']))    { $name = $_POST['name']; }
  if(isset($_POST['mail']))    { $mail = $_POST['mail']; }
  if(isset($_POST['subject'])) { $subject = $_POST['subject']; }
  if(isset($_POST['message'])) { $message = $_POST['message']; }
  if(isset($_POST['human']))   { $human = $_POST['human']; }

  // PHP mailer
  $to = 'ar@type16.com';
  if ( $subject !== '' ) { $subject = $subject; } else { $subject = "Message from " . get_bloginfo('name'); }
  $headers = 'From: '. $mail . "\r\n" .
    'Reply-To: ' . $mail . "\r\n";

  if ( !filter_var( $mail, FILTER_VALIDATE_EMAIL ) ) {
    formValidationResponse( "error", $email_invalid );
  } else {
    if ( empty($name) || empty($message) ) {
      formValidationResponse( "error", $missing_content );
    } else {
      $sent = mail($to, $subject, $message, $headers);
      if($sent) formValidationResponse( "success", $message_sent ); //message sent!
      else formValidationResponse( "error", $message_unsent ); //message wasn't sent
    }
  }

?>
