<?php $this->view('webtrybe-template/header', $data); ?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

// Instantiation and passing [ICODE]true[/ICODE] enables exceptions
$mail = new PHPMailer(true);
$mail->Mailer = "smtp";


 //Server settings
 $mail->SMTPDebug = false; // Enable verbose debug output
 $mail->isSMTP(); // Set mailer to use SMTP
 $mail->Host = 'sm1.cloudoon.com'; // Specify main and backup SMTP servers
 $mail->SMTPAuth = true; // Enable SMTP authentication
 $mail->Username = 'admin@webtrybe.com'; // SMTP username
 $mail->Password = 'Yf4O8dxhDV[]53'; // SMTP password
 $mail->SMTPSecure = 'tls'; // Enable TLS encryption, [ICODE]ssl[/ICODE] also accepted
 $mail->Port = 587; // TCP port to connect to




     if( $_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['email'], $_POST['subject'], $_POST['message'] ) ){

         // $name       = trim(stripslashes($_POST['name'])); 
         $from       = trim(stripslashes($_POST['email'])); 
         $subject    = trim(stripslashes($_POST['subject'])); 
         $message    = trim(stripslashes($_POST['message'])); 
         $to         = 'admin@webtrybe.com';
         $headers    = array();


         $headers[] = "MIME-Version: 1.0";
         $headers[] = "Content-type: text/plain; charset=iso-8859-1";
         $headers[] = "From: <{$from}>";
         $headers[] = "Reply-To: <{$from}>";
         $headers[] = "Subject: {$subject}";
         $headers[] = "X-Mailer: PHP/".phpversion();
    
    try {
        //Recipients
         $mail->setFrom($from);
         $mail->addAddress($to); 
        
        
        // Content
         $mail->isHTML(true); // Set email format to HTML
         $mail->Subject = $subject;
         $mail->Body = $message;
         $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
        $mail->send();
         echo '<h6 style="color: green; margin-top: 15px; font-wight:bold;">Message has been sent!</h6>';
        
        } catch (Exception $e) {
         echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    //     $result=mail( $to, $subject, $message, implode( "\r\n", $headers ) );
    //     //echo "<h1>success!</h1>";
    //     // exit( header( "Location:".ROOT."home" ) );
     }
?>

    <!-- Slider Area Start-->
    <div class="services-area">
        <div class="container">
            <!-- Section-tittle -->
            <?php if(isset($success) && $success) : ?>
            <p>Message sent!</p>
            <?php endif; ?>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center mb-80">
                        <span>Contact</span>
                        <h2>Get In Touch With Us​</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End-->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
            <div class="haveAproject mb-5"  data-background="<?=ASSETS?>webtrybe-template/img/team/have.jpg">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="wantToWork-caption text-center">
                                <h2>Need a free quote or have questions?</h2>
                                <h4 style="color: #fff; font-weight: 700;">Talk To Us</h4>
                            </div>
                        </div>
                    </div>
                </div>
    
    
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>
                    <div class="col-lg-8">
                    <?php check_message(); ?>
                        <form class="form-contact contact_form" action="" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"><?php if (isset($_POST['message'])) echo(htmlspecialchars($_POST['message'])); ?></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="antispam" id="antispam" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Antispam - Enter the current year'" placeholder="Antispam - Enter the current year">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email" value="<?php if (isset($_POST['email'])) echo(htmlspecialchars($_POST['email'])); ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Nairobi, Kenya.</h3>
                                <p>Avenue Road</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>admin@webtrybe.com</h3>
                                <p>Send us your queries anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->
    
        <?php $this->view('webtrybe-template/footer', $data); ?>
