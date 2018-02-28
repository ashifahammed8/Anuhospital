<?php
  $page_id = 6;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- Head file link here-->
	<?php include dirname(__FILE__).'/inc/head.php' ?>
	<!-- End of the Head file -->
</head>

<body>

		<!-- Navigation menu -->
	   	<?php include dirname(__FILE__).'/inc/header.php' ?>
	    <!-- Navigation Menu end -->

	    <!--Start page-banner-->
	    <section class="page-banner" style="background-image:url(images/resources/banner.jpg);">
	        <div class="container">
	    		<div class="content">
	                <h2>Contact Details</h2>
	            </div>
	            <ul class="breadcumb">
	                <li><a href="index.php">Home</a><i class="fa fa-chevron-right" aria-hidden="true"></i></li>
	                <li><a  class="active" href="service-single.php">Contact</a></li>
	            </ul>
	        </div>
	    </section>
	    <!--End page-banner-->
		
		<!-- Contact Details Section -->
		<section class="contact-info-area">
			<div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="contact-info">
                            <div class="icon-box"><i class="fa fa-map-marker"></i></div>
                            <h5> Kovelamudivari St.</h5>
                            <h5> Suryaraapet </h5>
                            <span>VIJAYAWADA - 520002</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="contact-info">
                            <div class="icon-box"><i class="fa fa-phone"></i></div>
                            <h5> 0866: 2438881/2438889</h5>
                            <span>Mon-Fri 8:30am-6:30pm</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="contact-info">
                            <div class="icon-box"><i class="fa fa-envelope"></i></div>
                            <h5>anuhospitals@yahoo.com</h5>
                            <span>24 X 7 online support</span>
                        </div>
                    </div>
                </div>
            </div>    
        </section>
        <!-- End of Contact Details -->

		<!-- Contact form -->
		<section class="contact_us">
			<div class="container">   
                <div class="sec-title text-center">
                    <h2>Get In <span>Touch</span></h2>
					<p></p>
                </div>
                <div class="default-form-area">
					<form id="contact-form" name="contact_form" class="default-form" action="#" method="post">
						<div class="row clearfix">
							<div class="col-md-6 col-sm-6 col-xs-12">
												
								<div class="form-group style-two">
									<input type="text" name="form_name" class="form-control" value="" placeholder="Your Name" required="">
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="form-group style-two">
									<input type="email" name="form_email" class="form-control required email" value="" placeholder="Your Email" required="">
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="form-group style-two">
									<input type="text" name="form_phone" class="form-control" value="" placeholder="Phone">
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
		                        <div class="form-group">
		                            <input type="text" name="form_subject" class="form-control" value="" placeholder="Subject">
		                        </div>
		                    </div>	
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="form-group style-two">
									<textarea name="form_message" class="form-control textarea required" placeholder="Message"></textarea>
								</div>
							</div>   											  
						</div>
						<div class="contact-section-btn text-center">
							<div class="form-group style-two">
								<input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
								<button class="thm-btn thm-color" type="submit" data-loading-text="Please wait...">send message</button>
							</div>
						</div> 
					</form>
				</div>          
			</div>
		</section>
		<!-- End of Contact form -->
		
		<!-- Footer file link here-->
   		<?php include dirname(__FILE__).'/inc/footer.php' ?>
    	<!-- End of the footer file -->

</body>
</html>






