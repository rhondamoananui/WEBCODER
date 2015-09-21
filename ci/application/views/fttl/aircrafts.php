<section class="aircrafts">

							<?php

							$image_properties = array(
					        'src'   => '../assets/img/fttl/chopperBanner.png',
					        'alt'   => 'Fly to the limit Aircrafts',
					        'class' => 'banner'
					        // 'width' => '100%',
					        // 'max-height'=> '450'
							);

							echo img($image_properties);
							?>
<h1>Aircrafts</h1>
<div class="container">


	<div class="media">
  		<div class="media-left media-top">


					      	<?php

								$image_properties = array(
					        'src'   => '../assets/img/fttl/CessnaStationAir.jpg',
					        'alt'   => 'Fly to the limit Aircrafts',
					        'class' => 'media-object',
					        'width' => '200',
					        'height'=> '150'
							);
							echo anchor('fttl/fixed_wing',img($image_properties), '');
							
							?>

  		</div>
  		<div class="media-body">
    		<h4 class="media-heading">Fixed Wing</h4>
    		Experience adrenaline-fueled adventure flights and mind-blowing aerobatic maneuvers.
  		</div>
	</div>

	<!-- ================================================== -->

	<div class="media">
	  	<div class="media-left media-top">
	

					      	<?php

							$image_properties = array(
					        'src'   => '../assets/img/fttl/helicopter.png',
					        'alt'   => 'Fly to the limit Aircrafts',
					        'class' => 'media-object',
					        'width' => '200',
					        'height'=> '150'
					        // 'title' => 'That was quite a night',
					        // 'rel'   => 'lightbox'
							);

							echo anchor('fttl/chopper',img($image_properties), '');
							?>
    	
  		</div>
  		<div class="media-body">
    		<h4 class="media-heading">Chopper</h4>
    		Fully catered multi day remote high country tramps, fly in, fly out. Charters are available by the day or week
  		</div>
	</div>


	<!-- ================================================== -->

	<div class="media">
  		<div class="media-left media-top">
    		

					      	<?php

							$image_properties = array(
					        'src'   => '../assets/img/fttl/glider.png',
					        'alt'   => 'Fly to the limit Aircrafts',
					        'class' => 'media-object',
					        'width' => '200',
					        'height'=> '150'
					        // 'title' => 'That was quite a night',
					        // 'rel'   => 'lightbox'
							);

							echo anchor('fttl/glider',img($image_properties), '');
							?>
    		
  		</div>
  		<div class="media-body">
    		<h4 class="media-heading">Glider</h4>
    		Soar like an eagle, high above the lakes and mountains, this is a once in a lifetime experience, that you will never forget.
  		</div>
	</div>

</div>
<div class="push"></div>






</section>