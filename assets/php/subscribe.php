<?php

  define('API_KEY', '4dc3b1dbcb641d914854b69a4678745a-us11');
  define('LIST_ID', '09c1c0398f');

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