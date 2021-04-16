<!DOCTYPE html>

<html>
	<head>
	  <meta charset="UTF-8" />
	  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	  <title>Contact Form</title>
	  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
	  <link rel="icon" href="assets/img/favicon.ico">
 
	  <link rel="stylesheet" href="contact.css" />
	  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	  


  
 
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	</head>
	</html>
	<body>
		<header id="header" class="fixed-top " style="position: fixed ">
		
			

	  
			  <nav id="navbar" class="navbar" style="padding: 15px; z-index: 997;background-color: #223350;">
				<h1 class="logo me-auto"><a style="text-decoration:none ; font-size: 30px;" href="">NT DATA</a></h1>

				<ul>
				  <li><a class="nav-link scrollto active" href="#Home"style="text-decoration:none">Home</a></li>
				  <li><a class="nav-link scrollto" href="#A propos"style="text-decoration:none">About</a></li>
				  <li><a class="nav-link scrollto" href="#services"style="text-decoration:none">Services</a></li>
				  <li><a class="nav-link scrollto" href="#produit"style="text-decoration:none">Produit</a></li>
				  <li><a class="getstarted scrollto" href="#contact"style="text-decoration:none">contactez-nous</a></li>
				</ul>
			  </nav>
			</div>
		  </header>
	   <section id="hero" class="d-flex align-items-center">

		
				  <div class="txt" style="padding: 27rem">
					<h1><span id="typed" > CONTACTEZ-NOUS </span></h1>
					
				  </div>
				</div>
	
				
	   </section>


<!-- ======= Contact Section ======= -->
<section id="contact" class="contact" style="padding: 3rem;">



	  <header class="section-header">
		<h2> Contactez-nous</h2>
		<p>Vous avez des questions ? Besoin d'une aide ou d'un conseil sur nos services ? Envie de vous exprimer sur un sujet particulier ? N'hésitez pas à contacter nos services.</p>
	  </header>

	  <div class="row gy-4">

		<div class="col-lg-6">

		  <div class="row gy-4">
			<div class="col-md-6">
			  <div class="info-box">
				<i class="bi bi-geo-alt"></i>
				<h3>Address</h3>
				<p>R1111 AGDIR,<br>AGADIR, MAROC</p>
			  </div>
			</div>
			<div class="col-md-6">
			  <div class="info-box">
				<i class="bi bi-telephone"></i>
				<h3>telephone</h3>
				<p>111111111<br>22222222</p>
			  </div>
			</div>
			<div class="col-md-6">
			  <div class="info-box">
				<i class="bi bi-envelope"></i>
				<h3>Email Us</h3>
				<p>info@example.com<br>contact@example.com</p>
			  </div>
			</div>
			<div class="col-md-6">
			  <div class="info-box">
				<i class="bi bi-clock"></i>
				<h3>Open Hours</h3>
				<p>Monday - Friday<br>9:00AM - 05:00PM</p>
			  </div>
			</div>
		  </div>

		</div>
		<div class="col-lg-6">

			<?php 
                            $Msg = "";
                          
                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
							if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                           
                        ?>

		  <form action="proce.php" method="post" class="php-email-form">
			<div class="row gy-4">
			  <div class="col-md-6">
				<input type="text" name="name" class="form-control" placeholder="Your Name" required>
			  </div>

			  <div class="col-md-6 ">
				<input type="email" class="form-control" name="email" placeholder="Your Email" required>
			  </div>

			  <div class="col-md-12">
				<input type="text" class="form-control" name="subject" placeholder="Subject" required>
			  </div>

			  <div class="col-md-12">
				<textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
			  </div>

			  
				<button class="btn btn-success" name="btn-send"> Send </button>
			  </div>

			</div>
		  </form>

		</div>

	  </div>

	</div>

  </section><!-- End Contact Section -->

	  <footer id="footer">

		
		<div class="footer-top">
		  <div class="cont" style="padding: 2rem ;background-color: #223350"  >
			<div class="row">
	
			  <div class="col-lg-3 col-md-6 footer-contact">
				<h4>Nta Data consulting</h4>
				<p>
				  A108 Adam Street <br>
				  New York, NY 535022<br>
				  United States <br><br>
				  <strong>Phone:</strong> 0638893484<br>
				  <strong>Email:</strong> info@example.com<br>
				</p>
			  </div>
	
			  <div class="col-lg-3 col-md-6 footer-links">
				<h4>Useful Links</h4>
				<ul >
				  <li><i class="bi bi-arrow-right-short"></i> <a href="#" style="text-decoration: none;">Home</a></li>
				  <li><i class="bi bi-arrow-right-short"></i> <a href="#"style="text-decoration: none;">About us</a></li>
				  <li><i class="bi bi-arrow-right-short"></i> <a href="#"style="text-decoration: none;">Services</a></li>
				 
				</ul>
			  </div>
	
			  <div class="col-lg-3 col-md-6 footer-links">
				<h4>Our Services</h4>
				<ul>
				  <li><i class="bi bi-arrow-right-short"></i><a href="#"style="text-decoration: none;">Web Design</a></li>
				  <li><i class="bi bi-arrow-right-short"></i> <a href="#"style="text-decoration: none;">Web Development</a></li>
				  <li><i class="bi bi-arrow-right-short"></i> <a href="#"style="text-decoration: none;">Product Management</a></li>
				  <li><i class="bi bi-arrow-right-short"></i> <a href="#"style="text-decoration: none;">Marketing</a></li>
				  <li><i class="bi bi-arrow-right-short"></i> <a href="#"style="text-decoration: none;">Graphic Design</a></li>
				</ul>
			  </div>
	
			  <div class="col-lg-3 col-md-6 footer-links">
				<h4>Our Social Networks</h4>
			
				<div class="social-links mt-3">
				
				  <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
				  <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
				  <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
				</div>
			  </div>
	
			</div>
		  </div>
		</div>
	
		<script>
			AOS.init();
		  </script>
	
	</body>
  </html>