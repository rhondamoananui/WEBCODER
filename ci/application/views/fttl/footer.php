<!-- This is the FTTL footer -->
<!-- This page contains

    1. social icons
    2. footer links
    3. javasript

 -->
  

    <div class="row navbar-bottom">


        <footer class="navbar navbar-inverse footer">
            <div class="row">

                <!-- social icons link to social websites -->
                <ul class="nav navbar-nav">
                   <li><a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                   <li><a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                   <li><a href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
                   <li><a href="http://www.google.com"><i class="fa fa-google"></i></a></li>
               	</ul>
    		    </div> 


               	<div class="row">
               		<ul class="nav navbar-nav">
                   		<li><a href="site-map.html">Site Map</a></li>
                   		<li><a href="terms-conditions.html">Terms & Conditions</a> </li>
                   		<li><a href="contact.html">Contact</a></li>
               		</ul>     
           	   	</div>       
       	</footer>
        
    </div>


    <script src="<?php echo base_url('../assets/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('../assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('../assets/js/booking.js') ?>"></script>



    <script type="text/javascript">

    // place all Jquery inside the document.ready function
    $( document ).ready(function() {

        // NAVIGATION ACTIVE
        // adds class="active" to the navigations current li
        //$('a[href="' + window.location + '"]').parent().addClass('active');
        $('a[href="' + window.location + '"]').parent().addClass('active');


        // add active class to the dropdown menu
        $('a[href="' + window.location + '"]').parent().parent().parent().addClass('active');

        // style the select menu
        // $('.selectpicker').selectpicker({
        //     style: 'btn-info',
        //     size: 4
        // });

    });
    </script>
</body>
</html>