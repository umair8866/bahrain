<?php
$title = 'ABC | Company Formation'; 
include('includes/header_sub.php');

error_reporting(0);

if(isset($_POST['submit'])){
    // $to = "company-formation@adliya-bh.com"; 
    $from = $_POST['email']; 
    $name = $_POST['name'];
    $number = $_POST['number'];
    $subject = "Adliya Business Center Web Contact Us";
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
			<h1 class="title">Company Formation</h1>
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
                     <h4>Our company formation advisors in Bahrain help clients open the most appropriate legal structure for their business projects in this country.</h4>
                     <p class="big">
                      • Our services include company formation and also corporate advisory services or corporate secretarial services, among others.
                  </p>
                  <p class="big">
                      • ABC provides tailored made business registration services. Located in Manama, Bahrain, it was incorporated in 2016 and, during this time, it
                      has served many local and foreign investors looking for assistance for company formation and other incorporation-related services.
                  </p>
                  <p class="big">
                      • Our experts have experience in registering medical facilities in the Kingdom of Bahrain.
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
                            <a href="mailto:company-formation@adliya-bh.com" style="text-decoration: none;">company-formation@adliya-bh.com</a>
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