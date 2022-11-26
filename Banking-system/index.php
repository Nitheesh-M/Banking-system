<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="swiper.min.css">

	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="index.css">
	<title>UNITED BANK</title>
</head>
<body>

	<section class = "hero">
		<header>
			<!---------------------------------------Logo----------------------------------------------------->
			<h1><a href="index.html">UNITED BANK</a></h1>

			<!----------------------------------------Login Section-------------------------------------------->
			<section id="login">
				<a href="trialLogin.html" id="login">USER LOGIN</a>
				<a href="trialAdmin.html" id="signup">ADMIN LOGIN</a>
			</section>
		</header>

		<div class = "hero-text" >
			<h2>Small steps to a better future.</h2>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum eaque dolores numquam tenetur laborum quis, facilis dolorem, voluptatum? Soluta illum, similique dolorum obcaecati exercitationem culpa, vitae voluptatibus repellendus earum voluptates saepe hic sed perferendis inventore perspiciatis rem asperiores quibusdam enim odio tempore sequi et facilis. Magni est, ipsam pariatur perspiciatis.</p>
		</div>

	</section>

	<!-----------------------------------------------------------------------------------------------------------------
	--------------------------------------------------Counters---------------------------------------------------------
	------------------------------------------------------------------------------------------------------------------->
	
    <!---------------------------------------------------------------------------------------------------
    ------------------------------------------Footer-----------------------------------------------------
    ----------------------------------------------------------------------------------------------------->

	<div class="footer">
    <div class="footer-content">
        <div class="footer-section about">
            <h1 class="logo-text"><span>Agri</span>Portal</h1>
            <p>Food4U is the largest, most reliable on-demand delivery and pickup platform.
            </p>
            <div class="contact">
                <span><i class="fa fa-phone">&nbsp; 123-456-789</i></span>
                <span><i class="fa fa-envelope">&nbsp; info@food4u.com</i></span>
            </div>
            <div class="socials">
               <a href="#"><i class="fa fa-facebook"></i></a>
               <a href="#"><i class="fa fa-instagram"></i></a>
               <a href="#"><i class="fa fa-twitter"></i></a>
               <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
        <div class="footer-section links">
            <h2>Get to know us</h2><br>
            <ul>
                <a href="#"><li>About us</li></a>
                <a href="#"><li>Culture</li></a>
                <a href="#"><li>Blog</li></a>
                <a href="#"><li>Careers</li></a>
                <a href="#"><li>Report fraud</li></a>
                <a href="#"><li>Contact us</li></a>
            </ul>
        </div>
        <div class="footer-section links">
            <h2>More</h2><br>
            <ul>
                <a href="#"><li>Privacy</li></a>
                <a href="#"><li>Terms</li></a>
                <a href="#"><li>API Policy</li></a>
                <a href="#"><li>CSR</li></a>
                <a href="#"><li>Security</li></a>
                <a href="#"><li>Sitemap</li></a>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        Copyrights &copy; 2020-2040 AgriPortal, All Rights Reserved.
    </div>
</div>
<script type="text/javascript" src="swiper.min.js"></script> 
     <script>
            var swiper = new Swiper('.swiper-container', {
              effect: 'coverflow',
              grabCursor: true,
              centeredSlides: true,
              slidesPerView: 'auto',
              coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows : true,
              },
              pagination: {
                el: '.swiper-pagination',
              },
            });
          </script>    
<script src="main.js"></script>
<script src="js/main.js"></script>
    </body>
    <script type="text/javascript">
    $(".chosen").chosen();
    </script>

</body>
</html>
