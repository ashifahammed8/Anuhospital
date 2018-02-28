<?php
  $page_id = 5;
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
	                <h2>Our Blogs</h2>
	            </div>
	            <ul class="breadcumb">
	                <li><a href="index.php">Home</a><i class="fa fa-chevron-right" aria-hidden="true"></i></li>
	                <li><a  class="active" href="bloggrid.php">Blog</a></li>
	            </ul>
	        </div>
	    </section>
	    <!--End page-banner-->
       
		<!-- Blog Grid Section -->
		<section class="latest-news style-2">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="item">
							<figure class="image-box">
								<a href="blog1.php" target="_blank"><img src="images/blog/blog1thum.jpg" alt="Awesome Image"></a>
							</figure>
							<div class="content-box">
								<div class="date">
									<h5>4</h5>
									<p>Jan<br>2018</p>
								</div>
													
								<h4><a href="blog1.php" target="_blank">Contagious diseases the most
 									underlying issue</a></h4>
								
								<p style="text-align: justify;">As Andhra Pradesh is suffering from deadly contagious diseases, we at our Anu Hospitals are endeavoring to eradicate most contagious diseases in all the possible ways  <a href="blog1.php" target="_blank"><span >Read More</span></a></p>
							</div>						
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="item">
							<figure class="image-box">
								<a href="blog2.php" target="_blank"><img src="images/blog/blog2thum.jpg" alt="Awesome Image"></a>
							</figure>
							<div class="content-box">
								<div class="date">
									<h5>4</h5>
									<p>Jan<br>2018</p>
								</div>
								
								<h4><a href="blog2.php" target="_blank">LOSE YOUR WEIGHT NOT SELF CONFIDENCE</a></h4>
								
								<p style="text-align: justify;">Bariatric surgery (weight loss surgery) includes a variety of procedures performed on people who have obesity. Weight loss is achieved by reducing the size of the stomach with a 
								<a href="blog2.php" target="_blank"><span >Read More</span></a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="item">
							<figure class="image-box">
								<a href="blog3.php" target="_blank"><img src="images/blog/blog3thum.jpg" alt="Awesome Image"></a>
							</figure>
							<div class="content-box">
								<div class="date">
									<h5>10</h5>
									<p>Jan<br>2018</p>
								</div>
								
								<h4><a href="blog3.php" target="_blank">GI & Laparoscopic Surgery</a></h4>
								
								<p style="text-align: justify;">What is a laparoscopic surgery? Well, these days Laparoscopic surgery is a widely acclaimed surgery technique in which surgeons use small incisions and long pencil-like instruments 
								<a href="blog3.php" target="_blank"><span >Read More</span></a>
								</p>
							</div>
						</div>
					</div>
					
				</div>
				<!--
				<ul class="page_pagination">
					<li><a href="#" class="tran3s"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
					<li><a href="#" class="active tran3s">1</a></li>
					<li><a href="#" class="tran3s">2</a></li>
					<li><a href="#" class="tran3s">3</a></li>
					<li><a href="#" class="tran3s"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				</ul>-->
			</div>  
		</section>
		<!-- End Blog Grid Section -->
		
		<!-- Footer file link here-->
	   	<?php include dirname(__FILE__).'/inc/footer.php' ?>
	    <!-- End of the footer file -->
		

	
	
</body>
</html>

