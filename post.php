<?php
$title = 'ABC | Accreditation'; 
include('includes/header_sub.php');

if(isset($_POST['submit'])){
    // $to = "info@yasserelectronics.com"; 
    $from = $_POST['email']; 
    $name = $_POST['name'];
    $number = $_POST['number'];
    $subject = "Yasser Eelectronics Contact Us";
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
    if($headers){
        echo '<div class="alert alert_success">
        <div class="alert_icon">
        <i class="icon-check"></i>
        </div>
        <div class="alert_wrapper">
        Mail Sent. Thank you <strong>' . $name . '</strong>, we will contact you shortly.
        </div><a href="#" class="close"><i class="icon-cancel"></i></a>
        </div>';

    }

    else{
        echo  '<div class="alert alert_error">
        <div class="alert_icon">
        <i class="icon-alert"></i>
        </div>
        <div class="alert_wrapper">
        Error, Mail not sent.
        </div><a href="#" class="close"><i class="icon-cancel"></i></a>
        </div>';
    }
    }

?>
<div id="Subheader" style="padding:290px 0 190px">
	<div class="container">
		<div class="column one">
			<h1 class="title">Accreditation</h1>
		</div>
	</div>
</div>
</div>
<div id="Content">
	<div class="content_wrapper clearfix">
		<div class="sections_group">
			<div id="post-62" class="no-title share-simple post-62 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized">
					<div class="section section-post-header">
						<div class="section_wrapper clearfix">
                <div class="column one single-photo-wrapper image">
                	<div class="image_frame scale-with-grid ">
                		<div class="image_wrapper">
                			<a href="images/home_company2_blog1-1200x774.jpg" rel="prettyphoto">
                				<div class="mask"></div>
                				<div>
                					<img src="images/home_company2_blog1-1200x675.jpg" class="scale-with-grid wp-post-image">
                					<meta itemprop="url" content="../images/home_company2_blog1.jpg" />
                					<meta itemprop="width" content="1240" />
                					<meta itemprop="height" content="800" />
                				</div>
                			</a>
                			<div class="image_links">
                				<a href="images/home_company2_blog1-1200x774.jpg" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
                			</div>
                		</div>
                	</div>
                </div>
            </div>
        </div>
        <div class="post-wrapper-content">
        	<div class="section mcb-section" style="padding-top:10px; padding-bottom:0px">
        		<div class="section_wrapper mcb-section-inner">
        			<div class="wrap mcb-wrap one valign-top clearfix">
        				<div class="mcb-wrap-inner">
        					<div class="column mcb-column one-fifth column_placeholder">
        						<div class="placeholder">
        							&nbsp;
        						</div>
        					</div>
        					<div class="column mcb-column three-fifth column_column">
        						<div class="column_attr clearfix">
        							<h4>Phasellus fermentum in, dolor. Pellentesque facilisis. Nulla imperdiet sit amet magna. Vestibulum dapibus, mauris nec malesuada fames ac turpis velit, rhoncus eu, luctus et interdum adipiscing wisi.</h4>
        							<p class="big">
        								Lorem ipsum dolor sit amet sapien leo ac augue nec tincidunt vehicula, dui lectus, pellentesque auctor velit. Mauris in wisi. Aenean ac sapien. Cras ut erat. Nulla nec elementum vitae, vulputate aliquam euismod quam interdum velit esse cillum dolore eu
        								fugiat nulla pariatur sed do eiusmod tempor incididunt.
        							</p>
        							<p class="big">
        								Ut eget quam molestie justo at nibh lacus, euismod purus eu sem sit amet pede. In accumsan orci. Proin aliquam enim ut leo. In hac habitasse platea dictumst. Duis neque ac erat. Integer eros vulputate at, bibendum vel, wisi. Mauris eros diam magna neque,
        								fringilla et, erat. Sed eros. Mauris aliquet quis, justo. Vivamus posuere dui. In congue fringilla id, elementum eleifend, ligula. Ut eget magna. Donec tempus nulla. Aliquam gravida eros sagittis
        								malesuada. Donec nonummy, mi. Donec in faucibus ligula. Ut sit amet, sodales dui at metus.
        							</p>
        						</div>
        					</div>

        				</div>
        			</div>
        		</div>
        	</div>
        </div>
    </div>
</div>
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
</div>
</div>
<?php 
include('includes/footer.php');
?>