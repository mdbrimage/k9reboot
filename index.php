<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		
		<title> K-9 Reboot</title>


		<link href="assets/css/bootstrap.css" rel="stylesheet" />
		<link href="assets/css/style.css" rel="stylesheet" />
		
	</head>
	<body >
	
 		<!-- BEGIN NAV SECTION -->
   	 	<div class="navbar navbar-inverse navbar-fixed-top">
        		<div class="container">
           		 <div class="navbar-header">
                		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    		<span class="icon-bar"></span>
                    		<span class="icon-bar"></span>
                    		<span class="icon-bar"></span>
                		</button>
				<!--<img src= "assets/imgs/logo.jpg" alt="K-9 Reboot logo">-->
                		<!--<a class="navbar-brand" href="#">LOGO</a>-->
			</div>
            		<div class="navbar-collapse collapse">
				
				<ul class="nav navbar-nav navbar-left">
					<li><img src= "assets/imgs/logo.JPG" height="100" /></a></li>
                		</ul>

                		<ul class="nav navbar-nav navbar-right">
                    			<li><a href="#home-sec">HOME</a></li>
                    			<li><a href="#services-sec">SERVICES</a></li>
                     			<li><a href="#about-sec">ABOUT</a></li>
                    			<li><a href="#contact-sec">CONTACT</a></li>
                		</ul>
            		</div>
			</div>
    		</div>
		<!--END NAV SECTION -->

	<!-- BEGIN HOME SECTION-->

		<div id="home-sec">
			<div class="container" id="home" >
				<div class="row text-center">
            				<div class="col-md-12">
                				<span class="head-main">Life is better with a well trained dog!</span><br>
						<img src= "assets/imgs/waldo1.jpg" alt="Owner's Dog Waldo">
                				<h2 class="head-sub-main">All Dogs &ndash; All Breeds &ndash; All Issues<br>We Can Help!</h2>
                				<!--<h3 class="head-last">We Can Help!</h3>-->
                				<a href="#contact-sec" class="btn btn-danger btn-lg head-btn-one">CONTACT US NOW TO GET STARTED !</a> 
            				</div>
				</div>
			</div>
		</div>
		<!--END HOME SECTION-->
		
	<!--BEGIN SERVICES SECTION--> 
		
		<section  id="services-sec">
			<div class="container">
				<div class="row ">
					<h1>OUR SERVICES :</h1>
						<div class="col-md-12 g-pad-bottom">
							 <h2><p>No two dogs are the same. Our training programs are tailored to your dog's specific needs.<p></h2>

						</div>
				
						<div class="col-md-12 g-pad-bottom">
							<div class="col-md-4 ">
								<div class="service-div">
									<h4> Evaluations</h4>
										<p> Evaluations are not designed to actually accomplish training, but rather to help you 
										determine which training program is an appropriate starting point for you and your dog. The 
										time will be mostly dedicated to discussing your training goals, any prior experience, and your 
										program preferences. </p>		
										<a href="#contact-sec" class="btn btn-danger btn-lg head-btn-one">LEARN MORE!</a>
								</div>
							</div>

							<div class="col-md-4 ">
								<div class="service-div">
									<h4> Puppy Program </h4>
										<p> K-9 Reboot Traning Center offers an eight-week puppy class.
										Puppies should be 12 weeks to 5 months old when the class begins.
										Class will be limited to 4 puppies and one instructor. </p>
										<a href="#contact-sec" class="btn btn-danger btn-lg head-btn-one">LEARN MORE!</a>
									</div>
							</div>

							<div class="col-md-4 ">
								<div class="service-div">
									<h4> Basic Obedience </h4>
										<p> In our eight-week basic obedience class, the instructors will train your dog in basic obedience skills. At the end of the class, 
										their goal is a trained dog in the most important obedience skills and to have the foundational development in obedience skills and 
										other activities, such as competitive obedience, agility, therapy dog work, or one of the many other exciting canine sports. </p>
										<a href="#contact-sec" class="btn btn-danger btn-lg head-btn-one">LEARN MORE!</a>
								</div>
							</div>

						</div>
					</div>
				</div>
			</service>
			<!--END SERVICES SECTION-->

	<!--BEGIN ABOUT SECTION-->
	<section id="about-sec">
		<div class="container">
			 <div class="row ">
				<h1>About Us:</h1>
				<p>The combination of a top of the line facility, highly trained staff, 
				and a common love for all dogs makes K-9 Reboot a truly unique business in our industry.
				K-9 Reboot is a veteran and woman owned business, providing top quality dog training to Austin, Tx 
				and surrounding areas. Our head trainer, Cynthia Garcia, is a graduate of the Starmark Academy 
				for Professional Dog Trainers and brings over 6 years as a Head Dog Trainer to K-9 Reboot Dog Training 
				Academy.
                               
				</p>
		
			 </div>

		</div>

	</section>







	<!--END ABOUT SECTION-->


	<!--BEGIN CONTACT SECTION-->
	<section  id="contact-sec">
		<div class="container">
			<div class="row">
				<h1>Contact Us :</h1>
				<div class="col-md-12 g-pad-bottom">
					<div class="col-md-6">
					<h2>Tell Us How We Can Help!</h2>




		<form method= "POST" action= "customerinfo.php " >
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <input type="text" name= "FName" class="form-control" required="required" placeholder=" First Name">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <input type="text" name= "LName" class="form-control" required="required" placeholder="Last Name">
                                </div>
                            </div>
 <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <input type="email" name= "email" class="form-control" required="required" placeholder="Email address">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" required="required" class="form-control" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" value= "Submit">Submit Request</button>
                                </div>
                            </div>
                        </div>
                    </form>


					</div>
		<div class="col-md-6">
                    <p>
                   <strong>Address:</strong>  123, Austin, TX <br />
                 <strong>Email:</strong>  info@yourdomain.com <br />
                          <strong>Web:</strong>  www.yourdomain.com <br />
                         <strong>Mobile:</strong> 210-420-1270<br />
                    </p>

				</div>
			</div>	
		</div>
	</section>
	<!--END CONTACT SECTION-->



	</body >
</html >