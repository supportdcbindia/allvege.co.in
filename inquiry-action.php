<?php
require('inquiry-config.php');

## auto create a logs file to view inquiry entries
// $myfile = fopen(INQUIRY_LOG_FILE, "a+") or die("Unable to open file!");
// fwrite($myfile, json_encode($_SERVER));
// fwrite($myfile, json_encode($_POST));
// fwrite($myfile, "\n\n");

$domain = WEBSITE_DOMAIN;
$contact_page = CONTACT_PAGE;
$company_name = COMPANY_NAME;
$subject_line = EMAIL_SUBJECT;
$from_email = FROM_EMAIL;
$to_email = TO_EMAIL;
$cc_email = CC_EMAIL;
$thanks_page = THANK_YOU_PAGE;

function send_request($data)
{
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://dcbindia.in/akismetcurl/akismet_check.php',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $data,
  ));
  $response = json_decode(curl_exec($curl));
  curl_close($curl);
  return $response;
}

$name = htmlspecialchars(stripslashes(trim($_POST['name'])));
$company_name = htmlspecialchars(stripslashes(trim($_POST['company_name'])));
$email = htmlspecialchars(stripslashes(trim($_POST['email'])));
$message = htmlspecialchars(stripslashes(trim($_POST['message'])));
$phone = htmlspecialchars(stripslashes(trim($_POST['number'])));

$city_country_title = 'Country';
$city_country = htmlspecialchars(stripslashes(trim($_POST['country'])));
$country_code = htmlspecialchars(stripslashes(trim($_POST['code'])));
if (IS_DOMESTIC == true) {
  $city_country_title = 'City';
  $city_country = htmlspecialchars(stripslashes(trim($_POST['city'])));
  $country_code = '';
}

$websiteDomain = "allvege.co.in"; ## for example dudhat.in OR dudhat.com
$allowed_origins = array(
  'https://' . $websiteDomain,
  'https://www.' . $websiteDomain,
  'http://' . $websiteDomain,
  'http://www.' . $websiteDomain
);

if (!in_array($_SERVER['HTTP_ORIGIN'], $allowed_origins)) {
  header('location:' . $contact_page);
}

$curlArr = array_merge($_POST, $_SERVER);
$curlArr['sitename'] = $_SERVER['HTTP_HOST'];
$curlArr['save'] = false;
$response = send_request($curlArr);

if ($response->result) {
  $curlArr = array_merge($_POST, $_SERVER);
  $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
  $curlArr['save'] = true;
  $curlArr['bcoz'] = "API CONDITION FAIL";
  $curlArr['status'] = "FAIL";
  $response = send_request($curlArr);
  header('location:' . $contact_page);
} else {
  try {
    if (
      isset($name) && trim($name) !== '' &&
      isset($company_name) && trim($company_name) !== '' &&
      isset($email) && trim($email) !== '' &&
      isset($message) && trim($message) !== '' &&
      isset($phone) && trim($phone) !== '' &&
      isset($city_country) && trim($city_country) !== ''
    ) {
      if (
        $_SESSION["code"] == $_POST['captcha'] &&
        $_POST['captcha'] != "!UNKNOWN_TYPE!" &&
        $_POST['captcha'] != "" && $_SESSION["code"] != ""
      ) {
        if (!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)) {
          //echo "ERROR junk email detact";
          $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
          $curlArr['save'] = true;
          $curlArr['bcoz'] = "JUNK DETACT";
          $curlArr['status'] = "FAIL";
          $response = send_request($curlArr);
          header('location:' . $contact_page);
        } else {
          preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $message, $msg_match);
          preg_match_all('/[\._a-zA-Z0-9-]+@[\._a-zA-Z0-9-]+/i', $message, $msg_match_email);
          $junk_word = file_get_contents('https://dcbindia.in/junk-word.php?ver=1.2');
          preg_match_all($junk_word, $message, $matches_words);
          //print_r($msg_match_email[0]);
          //echo count($msg_match_email[0]);exit;
          if (count($msg_match[0]) > 0 || count($msg_match_email[0]) > 0 || count($matches_words[0]) > 0) {
            //echo "ERROR junk msg";
            $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
            $curlArr['save'] = true;
            $curlArr['bcoz'] = "JUNK DETACT";
            $curlArr['status'] = "FAIL";
            $response = send_request($curlArr);
            header('location:' . $contact_page);
          } else {
            require_once('phpmailer/class.phpmailer.php');
            $message_body = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
            <html>
              <head>
                <meta http-equiv="content-type" content="text/html; charset=windows-1250">
                <meta name="generator" content="PSPad editor, www.pspad.com">
                <title></title>
                <style type="text/css">span.go{display:none} .go{display:none}</style>
              </head>
              <body>
                <div style="font-family:arial;font-size:12px;font-weight:normal;color:#000000;background:#ffffff;border:10px solid #cccccc;width:600px;padding:20px;margin: 0px auto;">
                  <table border="1" cellpadding="5" style="width:500px;font-family:arial;font-size:12px;font-weight:normal;color:#000000;border-collapse:collapse;border:1px solid #cccccc;border-color:#cccccc">
                    <tbody>
                      <tr>
                        <td colspan="2" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000;border-bottom:3px solid #cccccc"><b>Enquiry Details</b></td>
                      </tr>
                      
                      <tr>
                        <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Name:</td>
                        <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $name . '</b></td>
                      </tr>

                      <tr>
                        <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Company Name:</td>
                        <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $company_name . '</b></td>
                      </tr>
                      
                      <tr>
                        <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Email:</td>
                        <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $email . '</b></td>
                      </tr>

                      <tr>
                        <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Mobile:</td>
                        <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $phone . '</b></td>
                      </tr>
                      
                      <tr>
                        <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">' . $city_country_title . ':</td>
                        <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $city_country . '</b></td>
                      </tr>
                      
                      <tr>
                        <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Message:</td>
                        <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000;line-height:17px"><b>' . $message . '</b></td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </body>
            </html>
            ';

            $mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
            $mail->IsSMTP(); // telling the class to use SMTP
            try {
              $mail->Host = "mail.smtp2go.com"; // SMTP server
              $mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing)
              $emailArr = DCB_INQUIRY_TEST_EMAILS_ARR;
              if (in_array($email, $emailArr)) {
                $mail->AddAddress(DCB_INQUIRY_EMAIL, $subject_line);
                $mail->SetFrom($from_email, $subject_line);
                $mail->addReplyTo($email, $subject_line);
              } else {
                $mail->AddAddress($to_email, $subject_line);
                $mail->SetFrom($from_email, $subject_line);

                // if (!empty($cc_email)) {
                //   $mail->AddCC($cc_email, $subject_line);
                // }

                $mail->AddBCC(DCB_INQUIRY_EMAIL, $subject_line);
                $mail->addReplyTo($email, $subject_line);
              }

              $mail->Port = 465;
              $mail->Subject = $subject_line;
              $mail->SMTPAuth = true;
              $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
              $mail->Username = SMTP2GO_USERNAME;
              $mail->Password = SMTP2GO_PASSWORD;
              $mail->MsgHTML($message_body);
              //$mail->AddAttachment('images/phpmailer.gif');      // attachment
              // $mail->AddAttachment('images/phpmailer_mini.gif'); // attachment
              $mail->Send();
              $cookie_name = "inquierymodel";
              $cookie_value = "inquiryset";
              setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/"); // 86400 = 1 day
              $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
              $curlArr['save'] = true;
              $curlArr['bcoz'] = "MAIL SEND SUCCUSS";
              $curlArr['status'] = "SUCCESS";
              $response = send_request($curlArr);

              $message_body1 = '<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Thank You - Allvege Process Technologies</title>
</head>

<body style="margin:0; padding:0; background:#eef2f7; font-family: \'Segoe UI\', Arial, sans-serif;">

<div style="max-width:650px; margin:40px auto; background:#ffffff; border-radius:12px; overflow:hidden; box-shadow:0 8px 25px rgba(0,0,0,0.08);">

    <!-- Top Gradient Header -->
    <div style="background:linear-gradient(135deg,#0d6efd,#0a3d91); padding:35px 30px; color:#ffffff; text-align:center;">
        <h1 style="margin:0; font-weight:600; font-size:22px; letter-spacing:0.5px;color: #fff;">
            Thank You for Connecting With Us!
        </h1>
        <p style="margin-top:8px; font-size:14px; opacity:0.9;color: #fff;">
            Allvege Process Technologies
        </p>
    </div>

    <!-- Accent Divider -->
    <div style="height:5px; background:#ff9800;"></div>

    <!-- Body Content -->
    <div style="padding:35px 40px; color:#333; font-size:15px; line-height:1.8;">

        <p style="margin-top:0;">Hello <strong>'.$name.'</strong>,</p>

        <p>
            We’ve successfully received your enquiry and our technical team has been notified.
            Thank you for your interest in <strong>Allvege Process Technologies</strong>.
        </p>

        <p>
            Our representative will carefully review your message and respond shortly with
            the required information or next steps.
        </p>

        <div style="margin:30px 0; padding:20px; background:#f8fafc; border-left:4px solid #0d6efd; border-radius:6px;">
            <strong>What happens next?</strong><br>
            ✔ Enquiry review by our team<br>
            ✔ Technical assessment (if required)<br>
            ✔ Prompt response within 24–48 working hours
        </div>

        <p>
            We appreciate the opportunity to serve you and look forward to building a strong professional relationship.
        </p>

        <!-- CTA Button -->
        <div style="text-align:center; margin:30px 0;">
            <a href="https://www.allvegeprocess.com" 
               style="background:#ff9800; color:#ffffff; padding:14px 28px; text-decoration:none; border-radius:50px; font-weight:600; display:inline-block;">
               Visit Our Website
            </a>
        </div>

        <p style="margin-bottom:0;">
            Warm regards,<br>
            <strong>Allvege Process Technologies Team</strong>
        </p>

    </div>

    <!-- Footer -->
    <div style="background:#0f172a; padding:18px; text-align:center; color:#ffffff; font-size:12px;">
        © '.date("Y").'Allvege Process Technologies  
        <br>
        Industrial Solutions | Process Engineering | Innovation
    </div>

</div>

</body>
</html>
            ';
              $mail1 = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
              $mail1->IsSMTP();
              $mail1->Host = "mail.smtp2go.com"; // SMTP server
              $mail1->SMTPDebug = 0;
              $mail1->AddAddress($email, "We've received your message - thank you for contacting us");
              $mail1->SetFrom($from_email, "We've received your message - thank you for contacting us");
              $mail1->Port = 465;
              $mail1->Subject = "We've received your message - thank you for contacting us";
              $mail1->SMTPAuth = true;
              $mail1->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
              $mail1->Username = SMTP2GO_USERNAME;
              $mail1->Password = SMTP2GO_PASSWORD;
              $mail1->MsgHTML($message_body1);
              //$mail1->AddAttachment('images/phpmailer.gif');      // attachment
              // $mail1->AddAttachment('images/phpmailer_mini.gif'); // attachment
              $mail1->Send();


              header('location:' . $thanks_page);
              //echo "Message Sent OK<p></p>\n";
            } catch (phpmailerException $e) {
              $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
              $curlArr['save'] = true;
              $curlArr['bcoz'] = "MAIL SETTING NOT WORKING";
              $curlArr['Exception'] = $e->errorMessage();
              $curlArr['status'] = "FAIL";
              $response = send_request($curlArr);
              echo $e->errorMessage(); //Pretty error messages from PHPMailer

            } catch (Exception $e) {
              $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
              $curlArr['save'] = true;
              $curlArr['bcoz'] = "MAIL SETTING NOT WORKING";
              $curlArr['Exception'] = $e->getMessage();
              $curlArr['status'] = "FAIL";
              $response = send_request($curlArr);
              echo $e->getMessage(); //Boring error messages from anything else!

            }
          }
        }
      } else {
        $curlArr = array_merge($_POST, $_SERVER);
        $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
        $curlArr['save'] = true;
        $curlArr['bcoz'] = "CAPTCHA MISMATCH";
        $curlArr['status'] = "FAIL";
        $response = send_request($curlArr);
?>
        <script type="text/javascript">
          if (confirm("You have enter Wrong Captcha.....Please Enter Correct Captcha Code")) {
            window.location.href = "<?= $contact_page; ?>";
          } else {
            window.location.href = "<?= $contact_page; ?>";
          }
        </script>
      <?php
      }
    } else {
      $curlArr = array_merge($_POST, $_SERVER);
      $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
      $curlArr['save'] = true;
      $curlArr['bcoz'] = "REQUIRED DETAIL MISSING";
      $curlArr['status'] = "FAIL";
      $response = send_request($curlArr);

      ?>
      <script type="text/javascript">
        if (confirm("Please Enter All Details Correct..")) {
          window.location.href = "<?= $contact_page; ?>";
        } else {
          window.location.href = "<?= $contact_page; ?>";
        }
      </script>

<?php
    }
  } catch (Exception $e) {
    $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
    $curlArr['save'] = true;
    $curlArr['bcoz'] = "PHPMAILER NOT WORKING OR 500 INTERNAL ERROR";
    $curlArr['Exception'] = $e->getMessage();
    $curlArr['status'] = "FAIL";
    $response = send_request($curlArr);
    //echo $e->getMessage(); //Boring error messages from anything else!
  }
}
?>