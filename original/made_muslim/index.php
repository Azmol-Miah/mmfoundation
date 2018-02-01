<!DOCTYPE HTML>
<?php include ('form_process.php'); ?>
<html>
	<head>
		<title>Made_Muslim Foundation</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shortcut icon" type="image/x-icon" href="favicon.icon" />
	</head>
	<body>


			<header id="header" class="alt">
				<div class="inner">
					<h1>Coming Soon</h1>
					<hr>
					<div class="col-md-8">
					<img src="images/logo_info.png" style=" width:100%; height:100%; border=0" alt="Made Muslim Logo">
					</div>
							<ul id="nav">
								<li><a href="#header">Home</a></li>
								<li><a href="#intro">Seerah</a></li>
								<li><a href="#main">Tajweed</a></li>
								<li><a href="#footer">Contact</a></li>
							</ul>
				</div>
			</header>




				<!-- Banner -->
					<section id="intro" class="main">
						<img src="images/title.png" style="width:100%; height:100%; border=0 " alt="The seerah of the Prophet peace be upon him. Every Thursday, 8:15pm till 9:00pm, 69-71 Featherstall road North, Oldham, ol9 6qb (On top of Subway).">
					</section>



				<!-- CTA -->
					<section id="cta" class="main special">
						<header>
							<h2 style="color:#fff;">Weekly Maktab for Children</h2>
						</header>
						<div>
							<h3 style="color:#fff;">Classes are flexible</h3>
							<p>Please contact us for more information</p>
						</div>
					</section>


				<!-- Main -->
					<section id="main" class="main">
						<header>
							<h2>Tajweed</h2>
						</header>
						<div>
							<h3>Classes are flexible</h3>
							<p>Please contact us for more information</p>
						</div>
						<div>
							<img src="images/quran.png" style="width: 100%; height:100%;" alt="The Quran in Book form">
						</div>
					</section>


				<!-- Footer -->
					<footer id="footer">
						<div class="container">
						  <form id="contact" enctype="multipart/form-data" action="<?php echo  htmlentities($_SERVER['PHP_SELF']); ?>" method="post" >
						    <h3>Quick Contact</h3>
						    <h4>Contact us today for any questions you may have!</h4>
						    <fieldset>
						      <input placeholder="Name" type="text" tabindex="1" name="name" value="<?= $name ?>" autofocus>
									<span class="error"><?= $name_error ?></span>
							 	</fieldset>
						    <fieldset>
						      <input placeholder="Email Address" type="text" name="email" tabindex="2" value="<?= $email ?>">
									<span class="error"><?= $email_error ?></span>
								</fieldset>
						    <fieldset>
						      <input placeholder="Phone Number" type="text" name="phone" tabindex="3" value="<?= $phone ?>" >
									<span class="error"><?= $phone_error ?></span>
								</fieldset>
								<fieldset>
						      <input placeholder="Subject" type="text" name="subject" tabindex="4" value="<?= $subject ?>" >
									<span class="error"><?= $subject_error ?></span>
								</fieldset>
						    <fieldset>
						      <textarea placeholder="Type your Message Here...." type="text" name="message" tabindex="5" value="<?= $message ?>"></textarea>
								</fieldset>
								<span class="success"><?= $success ?></span>
						    <fieldset>
						      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending" true >Submit</button>
						    </fieldset>
						  </form>
						</div>
						<h1 class="icon fa-mobile"><a href="tel://+447759878416"> 07759878416</a></h1>
						<h4 class="icon fa-envelope">info@mmfoundation.co.uk</h4>
						<ul class="icons">
							<li><a href="https://www.facebook.com/MadeMuslimFoundation/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="https://www.instagram.com/mademuslim/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						</ul>
					</footer>
					<p class="copyright" style="text-align: center; color:#fff; ">&copy; Made_Muslim Foundation <span style="color:#999;">by <a href="azmolmiah.com">azmolmiah.com</a></span></p>

			<!-- Scroll Bar -->
			<div class="scrollbar">
				<div class="slider">

				</div>
			</div>

			<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script>
			$(document).ready(function(){
				// smooth scroling
			  $('.inner li a').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
			    && location.hostname == this.hostname) {
			      var $target = $(this.hash);
			      $target = $target.length && $target
			      || $('[name=' + this.hash.slice(1) +']');
			      if ($target.length) {
			        var targetOffset = $target.offset().top;
			        $('html,body')
			        .animate({scrollTop: targetOffset}, 1000);
			       return false;
			      }
			    }
			  });
				// sticky navigation
				var targetPos = $('#nav').offset().top;
				$(window).resize(function(){
					targetPos = $('#nav').offset().top;
				})
				$(window).scroll(function(){
					var scrollPos = $(this).scrollTop();
					if (scrollPos > targetPos){
						$('#nav').addClass('fixed');
					} else {
						$('#nav').removeClass('fixed');
					}
				});
				// scrollbar

			});
			</script>

	</body>
</html>
