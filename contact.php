<?php
$title = 'ABC | CONTACT'; 
include('includes/header_sub.php');

error_reporting(0);

if(isset($_POST['submit'])){
    $to = "info@adliya-bh.com"; 
    $from = $_POST['email']; 
    $name = $_POST['name'];
    $number = $_POST['number'];
    $subject = "Adliya-Bh Contact Us";
    // $subject2 = "Copy of your form submission";
    // $message = "Name:".$name . "\nNumber: " . $number . "\nWrote the following:" . "\n Description:\n" . $_POST['text'] . "\n Questions:\n" .$_POST['questions'];

    $message='<label>Name:</label>
                <input type="text" readonly value='.$name.'><br><br>
                <label>Number:</label>
                <input type="text" readonly value='.$number.'><br><br>
                <label>Subject:</label>
                <textarea readonly>'.$_POST['subject'].'</textarea><br><br>
                <label>Questions/Comments:</label>
                <textarea readonly>'.$_POST['body'].'</textarea>

    ';


    $headers[] = 'Content-type: text/html; charset=utf8';
    $headers[]='From:'. $from . "\r\n" .
    'Reply-To:'.$to . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($to,$subject,$message,implode("\r\n", $headers));

    }
?>
<div id="Subheader" style="padding:290px 0 190px">
    <div class="container">
        <div class="column one">
            <h1 class="title">Contact</h1>
        </div>
    </div>
</div>
</div>
<?php
if(isset($headers)){
        echo '<div class="alert alert_success">
        <div class="alert_icon">
        <i class="icon-check"></i>
        </div>
        <div class="alert_wrapper">
        Mail Sent. Thank you <strong>' . $name . '</strong>, we will contact you shortly.
        </div><a href="#" class="close"><i class="icon-cancel"></i></a>
        </div>';

    }

?>
<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="entry-content">
                <div class="section mcb-section highlight-right" style="padding-top:0px; padding-bottom:0px">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one-second valign-top clearfix" style="padding:100px 4% 60px 2%">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr clearfix">
                                        <h2>Have any Inquiry?</h2>
                                        <hr class="no_line" style="margin:0 auto 20px">

                                        <div id="contactWrapper">
                                            <form id="contactform" method="post">
                                                <!-- One Second (1/2) Column -->
                                                <div class="column one-second">
                                                    <input placeholder="Your name" type="text" name="name" id="name" size="40" aria-required="true" aria-invalid="false" required />
                                                </div>
                                                <!-- One Second (1/2) Column -->
                                                <div class="column one-second">
                                                    <input placeholder="Your Cell Number" type="text" name="number" id="number" size="40" min="8" max="9"  aria-required="true" aria-invalid="false" required />
                                                </div>
                                                <div class="column one">
                                                    <input placeholder="Your e-mail" type="email" name="email" id="email" size="40" aria-required="true" aria-invalid="false" required/>
                                                </div>
                                                <div class="column one">
                                                    <input placeholder="Subject" type="text" name="subject" id="subject" size="40" aria-invalid="false" required/>
                                                </div>
                                                <div class="column one">
                                                    <textarea placeholder="Message" name="body" id="body" style="width:100%;" rows="10" aria-invalid="false" required></textarea>
                                                </div>
                                                <div class="column one">
                                                    <input type="submit" name="submit"  id="submit" >
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrap mcb-wrap one-second valign-top clearfix" style="padding:100px 2% 60px 4%">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr clearfix">
                                        <h2>Contact Us</h2>
                                    </div>
                                </div>
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr clearfix">
                                        <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                            <div class="image_wrapper">
                                                <img class="scale-with-grid" src="images/home_company2_contact2.png">
                                            </div>
                                        </div>
                                        <hr class="no_line">
                                        <h6>Phone Number</h6>
                                        <p>
                                            <a href="tel:+973-77991388" style="text-decoration: none;">+973-77991388</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr clearfix">
                                        <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                            <div class="image_wrapper">
                                                <img class="scale-with-grid" src="images/home_company2_contact3.png">
                                            </div>
                                        </div>
                                        <hr class="no_line">
                                        <h6>Email Address</h6>
                                        <p>
                                            <a href="mailto:info@adliya-bh.com" style="text-decoration: none;">info@adliya-bh.com</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_divider">
                                    <hr class="no_line">
                                </div>
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr clearfix">
                                        <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                            <div class="image_wrapper">
                                                <img class="scale-with-grid" src="images/home_company2_contact4.png">
                                            </div>
                                        </div>
                                        <hr class="no_line">
                                        <h6>Company Address</h6>
                                        <p>
                                            Office: 24, Building: 111,<br>
                                            Road: 2807, Block: 328,<br>
                                            Area: Manama,<br>
                                            Kingdom Of Bahrain.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section no-margin-h no-margin-v full-width" style="padding-top:0px; padding-bottom:0px">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_map ">

                                    <div class="google-map-wrapper no_border">
                                        <div class="google-map" id="google-map-area-5af9b728335fb" style="width:100%; height:500px">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.4107127872503!2d50.57746601503032!3d26.215841283432695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjbCsDEyJzU3LjAiTiA1MMKwMzQnNDYuOCJF!5e0!3m2!1sen!2sbh!4v1619557818766!5m2!1sen!2sbh" height="500px" width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                            &nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php 
include('includes/footer.php');
?>