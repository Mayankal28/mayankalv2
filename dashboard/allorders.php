<!doctype html>
<html lang="en">
<?php include '../assets/connect.php' ?>
<?php include '../assets/check.php' ?>


<!-- Mirrored from www.vasterad.com/themes/hireo_082019/tasks-list-layout-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Sep 2019 13:58:43 GMT -->
<head>
<style>
	#more {display: none;}
</style>

<!-- Basic Page Needs
================================================== -->
<title>Mayankal</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/colors/blue.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="gray">

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<?php include 'dashmenu.php'; ?>
					<!-- Messages -->
					
				<!--  User Notifications / End -->

<div class="clearfix"></div>
<!-- Header Container / End -->

<!-- Spacer -->
<div class="margin-top-90"></div>
<!-- Spacer / End-->

<!-- Page Content
================================================== -->

<div class="container">
	<div class="row">
	

		<div class="col-xl-12 col-lg-8 content-left-offset" id="scrolling">

			<h1 class="page-title"> Orders:- </h1>

			</div>
			<?php  
				$sql="SELECT * FROM `orders` WHERE `uid`='$uid' ORDER BY id desc";
				$run=mysqli_query($conn,$sql);
				$num=mysqli_num_rows($run);
				if($num>0){
				$i =1;
				while ($result=mysqli_fetch_assoc($run)) {
					?>
					<div class="tasks-list-container margin-top-35">
		
						<!-- Task -->
						<div class="task-listing">

							<!-- Job Listing Details -->
							<div class="task-listing-details">

								<!-- Details -->
								<div class="task-listing-description">
									<div class="row">
										<div class="col-md-10"><h2 class="task-listing-title"><b><u>Category</u>:-</b><?php echo  strtoupper($result['post_cat']); ?></h2></div>
										<div class="col-md-1" style="margin-left: 0px;"><button class="button" onclick="WriteContent(this.id);" id="<?php echo $result['order_id'] . " " . $result['orderof_uid']; ?>"><i class="fa fa-edit"></i></button></div>
										<div class="col-md-1" style="margin-left: 0px;"><button class="button" onclick="deltedContent(this.id);" id="<?php echo $result['order_id'] . " " . $result['orderof_uid'];?>"><i class="fa fa-trash"></i></button></div>
									</div>
									<br>
									<h3 class="task-listing-title">Order Id: <?php echo $result['order_id']; ?><span style="margin-left: 40px;">Coins: &nbsp;<?php echo $result['coins']; ?></span></h3>
										<?php //$orderuid = $result['order_id']; 
											//$customer = $result['orderof_uid']; ?>
									<p><b style="color:red; font-size: 22px;" >Note:- </b><?php echo $result['imp_not'];  ?></p><br>
									<h3>Discription:-</h3>
									<div class="dummy">
									<p style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:22px;"><?php echo $result['descrip']; ?></p>
									</div>
								</div>

							</div>
						</div>
					</div>	
				<?php
					$i++;
					}
				}else{
					echo "<center><h1>No Orders is there</h1></center>";
				}
							//sumit
				?>
			
		</div>
	</div>
</div>
	<script type="text/javascript">
		function deltedContent(data){
			var res = data.split(" ");
			var val1 = res[0];
			var val2 = res[1];
		location.href = "../assets/remove_order.php?or_id="+val1+"";
		//console.log(res[0]);
	}
	</script>
	<script src="../js/readMoreJS.min.js"></script>
	<script type="text/javascript">
	$readMoreJS.init({
	target: '.dummy p',           // Selector of the element the plugin applies to (any CSS selector, eg: '#', '.'). Default: ''
	numOfWords: 80,               // Number of words to initially display (any number). Default: 50
	toggle: true,                 // If true, user can toggle between 'read more' and 'read less'. Default: true
	moreLink: 'Read More ...',    // The text of 'Read more' link. Default: 'read more ...'
	lessLink: 'Read Less'         // The text of 'Read less' link. Default: 'read less'
	});
		
	</script>

<!-- Footer
================================================== -->
<div id="footer">
	
	<!-- Footer Top Section -->
	<div class="footer-top-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">

					<!-- Footer Rows Container -->
					<div class="footer-rows-container">
						
						<!-- Left Side -->
						<div class="footer-rows-left">
							<div class="footer-row">
								<div class="footer-row-inner footer-logo">
									<img src="images/logo2.png" alt="">
								</div>
							</div>
						</div>
						
						<!-- Right Side -->
						<div class="footer-rows-right">

							<!-- Social Icons -->
							<div class="footer-row">
								<div class="footer-row-inner">
									<ul class="footer-social-links">
										<li>
											<a href="#" title="Facebook" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-facebook-f"></i>
											</a>
										</li>
										<li>
											<a href="#" title="Twitter" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-twitter"></i>
											</a>
										</li>
										<li>
											<a href="#" title="Google Plus" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-google-plus-g"></i>
											</a>
										</li>
										<li>
											<a href="#" title="LinkedIn" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-linkedin-in"></i>
											</a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
							</div>
							
							<!-- Language Switcher -->
							<div class="footer-row">
								<div class="footer-row-inner">
									<select class="selectpicker language-switcher" data-selected-text-format="count" data-size="5">
										<option selected>English</option>
										<option>Français</option>
										<option>Español</option>
										<option>Deutsch</option>
									</select>
								</div>
							</div>
						</div>

					</div>
					<!-- Footer Rows Container / End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Top Section / End -->

	<!-- Footer Middle Section -->
	<div class="footer-middle-section">
		<div class="container">
			<div class="row">

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>For Users</h3>
						<ul>
							<li><a href="user.php"><span>Top Users</span></a></li>
							<li><a href="expert.php"><span>Top Experts</span></a></li>
							<li><a href="blog.php"><span>Blogs</span></a></li>
							<li><a href="top_web.php"><span>Top Website</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>For Experts</h3>
						<ul>
							<li><a href="#"><span>Auther Panel</span></a></li>
							<li><a href="#"><span>Other Blogs</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Helpful Links</h3>
						<ul>
							<li><a href="contactUs.php"><span>Contact</span></a></li>
							<li><a href="privacy_policy.php"><span>Privacy Policy</span></a></li>
							<li><a href="disclaimer.php"><span>Disclaimer</span></a></li>
							<li><a href="aboutus.php"><span>About Us</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Account</h3>
						<ul>
							<li><a href="#"><span>Log In</span></a></li>
							<li><a href="#"><span>My Account</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Newsletter -->
				<div class="col-xl-4 col-lg-4 col-md-12">
					<h3><i class="icon-feather-mail"></i> Sign Up For a Newsletter</h3>
					<p>Weekly breaking news, analysis and cutting edge advices on job searching.</p>
					<form action="#" method="get" class="newsletter">
						<input type="text" name="fname" placeholder="Enter your email address">
						<button type="submit"><i class="icon-feather-arrow-right"></i></button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Middle Section / End -->
	
	<!-- Footer Copyrights -->
	<div class="footer-bottom-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					© 2019 <strong>Mayankal</strong>. All Rights Reserved.
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Copyrights / End -->

</div>
<!-- Footer / End -->

</div>
<!-- Wrapper / End -->
<script type="text/javascript">
	function WriteContent(data){
		var res = data.split(" ");
			var val1 = res[0];
			var val2 = res[1];
		location.href = "WriteContent.php?or_id="+val1+"&customer="+val2+"";
	}

</script>
<!-- Scripts
================================================== -->
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/jquery-migrate-3.1.0.min.html"></script>
<script src="../js/mmenu.min.js"></script>
<script src="../js/tippy.all.min.js"></script>
<script src="../js/simplebar.min.js"></script>
<script src="../js/bootstrap-slider.min.js"></script>
<script src="../js/bootstrap-select.min.js"></script>
<script src="../js/snackbar.js"></script>
<script src="../js/clipboard.min.js"></script>
<script src="../js/counterup.min.js"></script>
<script src="../js/magnific-popup.min.js"></script>
<script src="../js/slick.min.js"></script>
<script src="../js/custom.js"></script>

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() { 
	Snackbar.show({
		text: 'Your status has been changed!',
		pos: 'bottom-center',
		showAction: false,
		actionText: "Dismiss",
		duration: 3000,
		textColor: '#fff',
		backgroundColor: '#383838'
	}); 
}); 
</script>

<!-- Google Autocomplete -->
<script>
	function initAutocomplete() {
		 var options = {
		  types: ['(cities)'],
		  // componentRestrictions: {country: "us"}
		 };

		 var input = document.getElementById('autocomplete-input');
		 var autocomplete = new google.maps.places.Autocomplete(input, options);

	}
// ---------Read more Read Less tag------------------
</script>


<!-- Google API & Maps -->
<!-- Geting an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaoOT9ioUE4SA8h-anaFyU4K63a7H-7bc&amp;libraries=places"></script>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo_082019/tasks-list-layout-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Sep 2019 13:58:43 GMT -->
</html>