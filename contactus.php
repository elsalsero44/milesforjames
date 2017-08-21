<?
    require_once '/home/dperea/milesforjames.com/vendor/autoload.php';
    include ("php/constants.php");
    include ("php/utilities.php");
    include ("php/queries.php");
    include ("php/mailer.php");

    $mailResponse = "";

	// if they are submitted the form, then post it to the db for tracking and send out the email.
	// also post a little note thanking them for taking the time to fill out the form.
	if (count($_POST) > 0) {
		if (bIsValidEmail($_POST['email']))
		{
            // create mailer to send out password!
            $mailer = new Mailer();
            $mail = $mailer->create();
            $mail->Subject = 'Miles For James Inquiry';

            $mail->addAddress('volunteers@milesforjames.com', 'Miles For James Volunteers');

            $mail->Body = $szMessage;

            // build body of message from form parms.
            $szMessage 	= 	"Name: " . $_POST['name'] . "\n";
            $szMessage	.= 	"Email: " . $_POST['email'] . "\n";
            $szMessage 	.= 	"Phone 1: (" . $_POST['phone1_areacode'] . ") " . $_POST['phone1_prefix'] . "-" . $_POST['phone1_postfix'] . "\n";
            $szMessage 	.= 	"Phone 2: (" . $_POST['phone2_areacode'] . ") " . $_POST['phone2_prefix'] . "-" . $_POST['phone2_postfix'] . "\n\n";
            $szMessage 	.= 	"\nNotes: " . $_POST['notes'];
            $szMessage = str_replace("\'", "'", $szMessage); 	// replace any \' with ' in our string.
            
            $mail->Body = $szMessage;
	        
            // send email.
            $mailer->send($mail);

            $mailResponse = "Thank you! Someone will be in touch with you shortly!";
		} else {
            $mailResponse = "Email address entered is invalid, please try again.";
        }
    }

    $context = [
        'pageTitle' => 'Famous People',
        'contentTitle' => 'Contact Us...',
        'layout' => 'two-column',
        'mailResponse' => $mailResponse
    ];

    // render the page.
    $dust = new \Dust\Dust();
    $template = $dust->compileFile('templates/pages/contactus.dust');
    $output = $dust->renderTemplate($template, $context);
    echo($output);
?>