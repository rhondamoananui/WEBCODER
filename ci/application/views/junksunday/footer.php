		</div> 	<!-- closing content-wrap -->
			

			<footer>
				<div class="footer-nav">
					<ul class="nav navbar-nav">
						<li><a href="http://webcoder.co.nz/junksunday/#">Site Map</a><span>|</span></li>
                		<li><a href="http://webcoder.co.nz/junksunday/contact">Contact</a><span>|</span></li> 
                		<li><a href="http://webcoder.co.nz/junksunday/">Home</a><span>|</span></li>
                		<li><a href="http://webcoder.co.nz/junksunday/#">Privacy</a></li>
					</ul>

				</div>

				<div class="copy">
					<p> &copy; JunkSunday 2015 | By &nbsp; <a href="http://webcoder.co.nz">WebCoder</a></p>
				</div>

				<div class="social-icons">
					<i class="fa fa-facebook-square"></i>
					<i class="fa fa-twitter-square"></i>
					<i class="fa fa-google-plus-square"></i>

				</div>


			</footer>

		</div> 
	

	<script src="<?php echo base_url('../assets/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('../assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('../assets/js/booking.js') ?>"></script>
    <script src="<?php echo base_url('../assets/js/jquery.lightbox.js') ?>"></script>
    <script src="<?php echo base_url('../assets/js/jquery.bxslider.js') ?>"></script>
	<script type="text/javascript">
	


    // place all Jquery inside the document.ready function
    $( document ).ready(function() {

        // NAVIGATION ACTIVE
        // adds class="active" to the navigations current li
        //$('a[href="' + window.location + '"]').parent().addClass('active');
        $('a[href="' + window.location + '"]').parent().addClass('active');


        // PHOTO GALLERY - LIGHBOX
		$(function()
			{
				$('[rel="lightbox"]').lightbox();
			});

		// Home Page - image ticker 
		$('.bxslider').bxSlider({
		  minSlides: 6,
		  maxSlides: 6,
		  slideWidth: 270,
		  slideMargin: 10,
		  ticker: true,
		  speed: 30000
		});


    });

	</script>
	
	</body>

</html>