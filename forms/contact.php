<?php
//   /**
//   * Requires the "PHP Email Form" library
//   * The "PHP Email Form" library is available only in the pro version of the template
//   * The library should be uploaded to: vendor/php-email-form/php-email-form.php
//   * For more info and help: https://bootstrapmade.com/php-email-form/
//   */

//   // Replace contact@example.com with your real receiving email address
//   $receiving_email_address = 'sagarwipro143@gmail.com';

//   if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
//     include( $php_email_form );
//   } else {
//     die( 'Unable to load the "PHP Email Form" Library!');
//   }

//   if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $contact->from_name = $_POST['name'] ?? '';
//     $contact->from_email = $_POST['email'] ?? '';
//     $contact->subject = $_POST['subject'] ?? '';
//   $contact = new PHP_Email_Form;
//   $contact->ajax = true;


//   $contact->to = $receiving_email_address;
//   // $contact->from_name = $_POST['name'];
//   // $contact->from_email = $_POST['email'];
//   // $contact->subject = $_POST['subject'];
//   echo $contact->to . ":::" . $contact->from_name . ":::::" . $contact->from_email;
// // echo $contact->to + ":::" + $contact->from_name + ":::::" + $contact->from_email;
//   // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
//   /*
//   $contact->smtp = array(
//     'host' => 'example.com',
//     'username' => 'example',
//     'password' => 'pass',
//     'port' => '587'
//   );
//   */

//   $contact->add_message( $_POST['name'], 'From');
//   $contact->add_message( $_POST['email'], 'Email');
//   $contact->add_message( $_POST['message'], 'Message', 10);

//   echo $contact->send();
// } else {
//     die('Invalid request method.');
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Set your receiving email address here
  $to = "sagarwipro143@gmail.com";

  $name = htmlspecialchars($_POST['name'] ?? '');
  $email = htmlspecialchars($_POST['email'] ?? '');
  $subject = htmlspecialchars($_POST['subject'] ?? 'Contact Form Submission');
  $message = htmlspecialchars($_POST['message'] ?? '');

  // Validate required fields
  if (!$name || !$email || !$message) {
    http_response_code(400);
    echo "All fields are required.";
    exit;
  }

  // Build the email content
  $email_content = "Name: $name\n";
  $email_content .= "Email: $email\n";
  $email_content .= "Message:\n$message\n";

  // Set headers
  $headers = "From: $name <$email>";

  // Send the email
  if (mail($to, $subject, $email_content, $headers)) {
    echo "Your message has been sent. Thank you!";
  } else {
    http_response_code(500);
    echo "Something went wrong. Please try again.";
  }
} else {
  http_response_code(403);
  echo "There was a problem with your submission.";
}

?>
