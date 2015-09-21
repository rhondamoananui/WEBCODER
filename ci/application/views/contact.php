<section class="contact" id="contact" >
	<h2>Contact</h2>
	<div>

		<?php echo form_open('home/email'); 
			echo '<div>';
			echo '<input type="text" class="form-control" placeholder="Your Name" name="name">';
			echo '<input type="email" class="form-control" placeholder="Your Email" name="from">';
			echo '<input type="text" class="form-control" placeholder="Subject" name="subject">';
			echo '<textarea  class="form-control" rows="10"  placeholder="Leave a Message" name="message"></textarea>';
			echo '<input type="submit" class="btn btn-form" name="send" value="SEND">';
			?>
			</div>
		</form>

		<div class="contact-details">
			<div class="phone"><i class="fa fa-mobile fa-4x"></i><a href="tel:+64210495450"><h4>+64 21 049 5450</h4></a></div>
			<div class="email"><i class="fa fa-envelope-o fa-3x"></i><a href="mailto:rhonda29@vodafone.co.nz"><h4>rhonda@webcoder.co.nz</h4></a></div>
		</div>
	</div>

</section>