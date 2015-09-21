<footer>
	<div class="row">
		<div class="footer">
			<a href="tel:+64210495450"><i class="fa fa-phone-square fa-4x"></i></a>
			<a href="http://github.com/rhondamoananui" >
				<i class="fa fa-github-square fa-4x"></i>
			</a>

			<!-- <a href="mailto:rhonda29@vodafone.co.nz" >
				<i class="fa fa-envelope-square fa-4x"></i>
			</a> -->

			<a href="https://nz.linkedin.com/in/rhondamoananui" >
				<i class="fa fa-linkedin-square fa-4x"></i>
			</a>
			<!-- <i class="fa fa-git-square fa-4x"></i> -->

		</div>
	</div>
</footer>

  <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

  <script type="text/javascript">

  	$( document ).ready(function() {

        // NAVIGATION ACTIVE
        // adds class="active" to the navigations current li
        $('a[href="' + window.location + '"]').parent().addClass('active');
        console.log(window.location);
        
        // NAVIGATION CLICK LIST ITEM TO SCROLL TO ANCHOR ON THE SAME PAGE
        // http://www.learningjquery.com/2007/10/improved-animated-scrolling-script-for-same-page-links
        $('a[href*=#]').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
		    && location.hostname == this.hostname) {
			      var $target = $(this.hash);
			      $target = $target.length && $target
			      || $('[name=' + this.hash.slice(1) +']');
			      if ($target.length) {
			        var targetOffset = $target.offset().top-100;
			        $('html,body')
			        .animate({scrollTop: targetOffset}, 1000);
			       return false;
			      }
		    }
		});

// ----------------------------------------------------------------------------------------------------------------------------
// 
// 							SCROLL TO FIXED NAVIGATION
// 
// ----------------------------------------------------------------------------------------------------------------------------


        // STICKY NAVIGATION
        //  http://codepen.io/anon/pen/LVLJwo
		var  mn = $(".nav");
	    mns = "main-nav-scrolled";
	    hdr = $('.intro').height()+280;

	    
		
	    	function stickyNav(){

		    	// when the user starts to scroll
				$(window).scroll(function() {

					// if the user scrolls to the bottom of section.intro
					  if( $(this).scrollTop() > hdr ) {


	  
						  	// add the class mns to the nav
						    mn.addClass(mns);
						   	
						    // show small logo
						    mn.css('padding-top', '1em').slideDown();
						    $('.nav-end').addClass('nav-padding');
						    $('.center-logo').css('width', '300px').css('margin-top', '-1em').css('padding', '.2em');

						    // hide the large logo and show the small logo
						    $('.center-logo #logo1').addClass('hide');
						    $('.center-logo #logo2').removeClass('hide');

					    
					  } else {
					  	// show large logo
					  	// if the scroll height is less that the section.intro height 
					  	// remove mns class from the nav
					    mn.removeClass(mns);

					    // show large logo
					    // hide small logo
					    $('.nav-end').removeClass('nav-padding');
					    $('.center-logo').css('width', '400px');
					    $('.center-logo #logo2').addClass('hide');
					    $('.center-logo #logo1').removeClass('hide');

					  }
				});
			}


// ----------------------------------------------------------------------------------------------------------------------------
// 
// 							Make Changes to Mobile Veiw & Desktop View
// 
// ----------------------------------------------------------------------------------------------------------------------------

		// var ravenous = function() { 
		function checkPosition() {
			
			// Set the matchMedia

			if (window.matchMedia('(max-width: 780px)').matches)
			{
				// --------------------
				// MOBILE & TABLET VIEW
				// --------------------

				// NAVIGATION
				// hide the main nav
				mn.hide();

  				// Show the mobile nav button (hamburger)
				$('.nav-header').removeClass('hide');

				// When the nav button is clicked
				// toggle the menu to show or hide the menu list
				$( "#menu" ).hide();
				$('#nav-btn').click(function(){


					$( "#menu" ).toggle( "slow", function() {

					});
				});
				
				
				// FOOTER
				// make the footer fixed
				$('footer').css('position', 'fixed').css('bottom', '0').css('width', '100%').show();

				// add padding to the bottom of the page so the content can scroll above the fixed footer
				$('.contact').css('padding-bottom', '10em');
 

 				// CONTENT
 				// on the main-sec center the content for mobile view
				$('.main-sec').css('justify-content','center').css('padding-top', '2em');

				// remove the image of the devices on mobile view
				$('.responsive-design').css('display', 'none');

				// Change the Contact Div from Row to Column, 
				$('.contact div').css('flex-direction', 'column').css('align-items','center');

				// Make the contact form 100% wide on mobile view
				$('.contact div form').css('width', '100%');



			}else{
				

  				// ----------------------
  				// LAPTOP & DESKTOP VIEWS
  				// ----------------------

				// NAVIGATION 
				// hide the mobile menu when viewing from a large screen
				$( "#menu" ).hide();

				// Call the function for the sticky nav
				stickyNav();

				// FOOTER
				// add padding at the end of .contact for the fixed footer
				$('.contact').css('padding-bottom', '10em');
		
			}
		}


		// // Set the function to resize
		$(window).resize(function(){location.reload();});

		// // Call the function
		checkPosition();
   	

    });
  </script>
</body>
</html>