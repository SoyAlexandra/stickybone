<?php

  define('API_KEY', '04b599c7635de0af6fb554207416053b-us11');
  define('LIST_ID', '961f8f1286');

  require_once('MailChimp.php');

  $email = isset($_POST['email']) ? $_POST['email'] : '';

  $MailChimp = new Mailchimp(API_KEY);

  $result = $MailChimp->call('lists/subscribe', array(
      'id'     => LIST_ID,
      'email'  => array( 'email' => $email ),
      'double_optin' => false,
      'update_existing' => true,
      'replace_interests' => false,
      'send_welcome' => false
  ));

  echo json_encode($result);

?>