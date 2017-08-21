<?
/* This is a helper PHP utility class that provides an interface for creating and sending a mail
// using the PHP Mailer interface using SMTP.
*/

require '/home/dperea/PHPMailer-master/PHPMailerAutoload.php';

class Mailer 
{
    function __construct() {
    }

    public function create() {
        $mail = new PHPMailer;
        $mail->isSMTP();
        
        // If you are having problems with sending an email, turn this on for detailed error info.
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 0;
        $mail->Debugoutput = 'html';

        // This needs to be set to the host that the email is on...see the following for information on what this needs to be set to...
        // https://help.dreamhost.com/hc/en-us/articles/215507068-Troubleshooting-PHP-mail-
        $mail->Host = "sub5.mail.dreamhost.com";
            
        // Defaults..
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->Username = "admin@milesforjames.com";
        $mail->Password = "44online";
        $mail->setFrom('noreply@milesforjames.com', 'Miles For James');

        return $mail;
    }

    // interface to send an existing mail object, logging out the proper info depending on SMTPDebug level defined on create.
    public function send($mail) {
        //send the message, check for errors
        
        if (!$mail->send()) {
           echo "Mailer Error: " . $mail->ErrorInfo;
        }
    }
}