<?php

                        //Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html>

<head>
    <html lang="eng">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Curriculum Vitae</title>
</head>
<style>
.content {
    max-width: 960px;
    margin: 0 auto;
}

.content div p {
    margin: 5px;
    font-size: 18px;
}

#experience {
    display: flex;
    flex-direction: row;
}

.start {
    justify-content: flex-start;
    width: 800px;
    margin: 10px;

}

.end {
    justify-content: flex-end;
    width: 100px;
    margin: 10px;

}

#personal {
    text-align: center;
}
</style>

<body>
    <div class="content p-2">
        <div class="text-center pt-4">
            <a href="https://training.zuri.team" target="blank"><img src="logo/download.png" class="img-fluid" width="300"></a>
        </div><br><br>
        <div id="personal">
            <h2>Hey I'm <span class="text-primary">Ojugo Samson Ehis</span></h2>
        </div>
        <div id="skills">
            <h3>Skills</h3>
            <p>Good knowledge of HTML, CSS, Bootstrap, JavaScript, WordPress, PHP, UNIT TESTING, GIT, OOP, Laravel and MYSQL.</p>
        </div>
        <div id="skills">
            <h3>Personal Portfolio</h3>
            <a href="https://samsonojugo.herokuapp.com">https://samsonojugo.herokuapp.com</a>
        </div>
        <div>
            <h3>Experience</h3>
            <div id="experience">
                <div class="start" style="margin-top: 0">
                    <h5>(Software Developer / ATM Support Engineer) - (Universal Horizon Limited)</h5>
                    <ul>
                        <li>Incident Management System</li>
                        <li>Debugging and troubleshooting of web applications</li>
                        <li>MySQL database Management</li>
                        <li>Building Scalable new features on existing products</li>
                    </ul>
                </div>
                <!-- <div class="end"><h4>From - To</h4>
        <p>2020 - Present</p></div>
      </div>   -->
            </div>
            <div id="education">
                <h3>Education</h3>
                <div id="experience">
                    <div class="start" style="margin-top: 0">
                        <h5>(University of Benin) - (Bsc. Computer Science)</h5>
                        <li>Resourceful member of the Nigeria Computer Society
                            NCS student chapter, UNIBEN).</li>
                        <li>Good team member and leader at various departmental practical groups</li>
                        </ul>
                    </div>
                    <!-- <div class="end"><h4>From - to</h4>
        <p>2011 - 2015</p></div>
      </div> -->
                </div>
                <div id="interest">
                    <h3>Interest</h3>
                    <p>Learning new technology tools, Internet surfing, music and drawing</p>
                </div>
            </div>

            <section id="contact pt-4">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 text-center p-1">
                    <div class="alt-font text-medium text-uppercase margin-5px-bottom sm-margin-three-bottom "><h4 class="text-primary">I'M OPEN FOR CONTRACT</h4></div>
                    <h5 class="margin-55px-bottom alt-font font-weight-600 text-uppercase md-margin-30px-bottom sm-margin-15px-bottom">GET <span class="text-primary">FREE</span> BUSINESS CONSULTATION AND <span class="text-primary">FREE</span> WHITEBOARD ANIMATION ON A GO</h5>
                    <div class="contact-us-form rounded p-4" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);">
                        <form method="POST" id="form" >
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Enter name" required="required">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Enter email" required="required">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone" placeholder="Enter phone number" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="comment" id="comment" class="form-control" rows="7" cols="25" placeholder="Your How can we help ( Tell us about your business and goals"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="number" id="budget" class="form-control" name="budget" placeholder="What is the budget for the project *"  required="">
                                    </div>
                                </div>

                                <div class="col-sm-12 mt-3">
                                    <button type="submit" class="btn btn-dark btn-block" id="btnContactUs" name="submit">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

<?php
    if(isset($_POST['submit'])){


                
                $fname= $_POST['name'];
                $mail=$_POST['email'];
                $phone=$_POST['phone'];
                $message=$_POST['comment'];
                $budget=$_POST['budget'];
                
                $subject = 'Contact Form';
                
                //Sending email
                        $to='samsonojugo@gmail.com';
                        $subject = $subject;
                    
                        // $headers[] = 'MIME-Version: 1.0';
                        // $headers[] = 'Content-type: text/html; charset=iso-8859-1';
                        // $headers[] = 'From: '.$fname.' <'.$mail.'>' . "\r\n" .
                        // 'Reply-To: '.$mail.'' . "\r\n" .
                        // 'X-Mailer: PHP/' . phpversion();
                        
    
                        $body = '<html><body>';
                        $body .= '<h2 style="color:black;">Contact Form</h2>';
                        $body .= '<p>Full name: <b>'.$fname. '</b></p><br><br>';
                        $body .= '<p>Phone: <b>'.$phone. '</b></p><br><br>';
                        $body .= '<p>Email: <b>'.$mail. '</b></p><br><br>';
                        $body .= '<p>Budget: <b>'.$budget. '</b></p><br><br>';
                        $body .= '<p>Message: <b>'.$message. '</b></p><br><br>';
                        $body .= '</body></html>';
            
                        // $mail=mail($to, $subject, $body, implode("\r\n", $headers));


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'samsonojugo@gmail.com';                     //SMTP username
    $mail->Password   = 'quietnoisemaker';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('samsonojugo@gmail.com', 'Mailer');
    $mail->addAddress('dequietdennis@gmail.com', 'samson');     //Add a recipient
    // $mail->addAddress($mail);               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');
    $mail->CharSet = "UTF-8";

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $body;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "<script>swal({
                     title: 'Message sent',
                     icon: 'success',
                     button: 'Ok!',
                   })</script>";
} catch (Exception $e) {
    echo "
        <script>swal({
                     title: 'Message could not be sent. Mailer Error: {$mail->ErrorInfo}',
                     icon: 'warning',
                     button: 'Ok!',
                  })</script>
    ";
}
                        
                  //       if($mail){
                  //           echo "<script>swal({
                  //   title: 'Message sent',
                  //   icon: 'success',
                  //   button: 'Ok!',
                  // })</script>";
                  //       }else{
                  //           echo "<script>swal({
                  //   title: 'Opps! Error sending message',
                  //   icon: 'warning',
                  //   button: 'Ok!',
                  // })</script>";
                  //       }
            }
        ?>