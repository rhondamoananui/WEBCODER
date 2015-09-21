<!-- This page is the Chopper Page -->
<section class="planes">

    <!-- LEFT SIDE -->
    <!-- All content apart from the booking form goes in this div -->
    <div class="left-side">

        <!-- This is the banner image -->
        <?php

        $image_properties = array(
            'src'   => '../assets/img/fttl/home-choper1.png',
            'alt'   => 'Fly to the limit Aircrafts',
            'class' => 'post_images'

            );

        echo img($image_properties);
        ?>

        <!-- This is the Content for the Chopper page -->
        <div class="glider-content">
            <h1>Chopper Adventures</h1>

            <h3>Scenic Flights</h3>
            <p>One of our very experienced pilots will take you to places that you will remember forever.</p>

            <h3>Day Charters</h3>
            <p>Get Dropped off for the day at one of the most spectacular lakes in the world. Choose between Lake Wanaka, Lake Hawea, Lake Wakatipu & Lake Te Anau. Take a picnic, go swimming, and just relax in paradise.</p>

            <h3>Multi Day Charters</h3>
            <p>Fully catered multi day remote high country tramps, fly in, fly out. Charters are available by the day or week. Call 0800 DOC HUTS to book one of the remote huts. Fly to the limit will drop you off, and pick you up.</p>

            <h3>Photographic Flights</h3>
            <p>The doors can be removed (by arrangement) for professional assignments</p>

        </div>

    </div>	

    <!-- RIGHT SIDE -->
    <!-- This is the Booking Form -->
    <!-- The Booking Form calculates the cost of the trip and returns a quote -->
    <!-- works with booking.js -->
    <aside class="right-side">
        <form class="calculator">

            <!-- Step 1 is to Choose the adventure -->
            <!-- when the adventure has been chosen the second fieldset will be shown -->
            <!-- In the second fieldset, choose how many people will be on the flight & how long for -->
            <!-- The sum is calculated and the next fieldset is shown with the calculated result  -->
            <fieldset id="flights" style="display: block;">
                <h2>Book Online Today</h2>
                <p class="color">Choose a Flight Adventure</p>
                <select name="adventure" class="form-control">
                    <option class="calculateMe" value="1200">Glider Plane Flight - $1200/hr</option>
                    <option class="calculateMe" value="450">Fixed Wing Flight - $450/hr</option>
                    <option class="calculateMe" value="450">Scenic Flight - $450/hr</option>
                    <option class="calculateMe" value="700">Photographic Flight - $700</option>
                    <option class="comment" value="comment">Custom Flight - $450</option>
                    <option class="comment" value="comment">Day Charters - $450</option>
                    <option class="comment" value="comment">- Lake Hawea - $450</option>
                    <option class="comment" value="comment">- Lake Te Anau - $450</option>
                    <option class="comment" value="comment">- Lake Wakatipu - $450</option>
                    <option class="comment" value="comment">- Lake Wanaka - $450</option>
                    <option class="comment" value="comment">Multi Day Charters - $450</option>
                    <option class="comment" value="comment">Cameron Hut - $450</option>
                    <option class="comment" value="comment">Makarora Hut - $450</option>
                    <option class="comment" value="comment">Brewster Hut - $450</option>
                </select>
            </fieldset>

            <!-- Show the radion buttons so the user can choose how many people will be on the charter -->
            <!-- and how long they want to be in the air -->
            <!-- How Many *RADIO BUTTON*-->
            <fieldset id="calculate" style="display: none;">
                <div class="center">
                    <h3 class="color">How Many People?</h3>
                    <div class="form-control">
                        <input type="radio" name="people" value="1" class="quantity"> 1
                        <input type="radio" name="people" value="2" class="quantity"> 2
                        <input type="radio" name="people" value="3" class="quantity"> 3
                        <input type="radio" name="people" value="4" class="quantity"> 4
                    </div>
                    <!-- How Long *RADIO BUTTON* -->
                    <h3 class="color">How Long?</h3>
                    <div class="form-control">
                        <input type="radio" name="duration" value="1" class="duration"> 1 hour
                        <input type="radio" name="duration" value="2" class="duration"> 2 hours
                        <input type="radio" name="duration" value="3" class="duration"> 3 hours
                    </div>
                </div>
            </fieldset>


            <!-- Show the Sum Calculation & the "Make a Booking Button" -->
            <fieldset id="sum" style="display: none;">
                <div id="totalOfEquation" class="alert alert-success" role="alert" ></div>
                
                    <input class="btn btn-primary" type="button" value="Make a Booking" id="button-sum">
                
            </fieldset>

            

            <!-- Depending on the Adventure selection -->
            <!-- this field set asks the user for more details -->
            <fieldset id="comment" style="display: none;">

                <p class="color">Message</p>
                <textarea name="text" class="comment form-control" placeholder="Comment"></textarea><br>

                <input class="btn" type="button" value="Next" id="button-next">
            </fieldset>

            <!-- This fieldset asks for personal information -->
            <fieldset id="personal" style="display: none;">
                <div id="message" class="color">
                    <p><span id="calcTotal"></span></p>
                    <p>Enter your details below, so we can arrange a booking time.</p>
                </div>

                <input class="personal form-control" type="text" name="name" placeholder="Your Name"><span class="success"></span><br><br>  
                <input class="personal form-control" type="text" name="email" placeholder="Email"><span class="success"></span><br><br> 
                <input class="personal form-control" type="text" name="number" placeholder="Phone Number"><span class="success"></span><br><br>     

                <input class="btn" type="button" value="Submit" id="button-submit">
            </fieldset>

            <!-- This is the confirmation message -->
            <fieldset id="confirmationMessage" style="display: none;">
                <p class="color"><b>Success</b></p>
                <p class="color">Thank You, We got your enquiry. You will hear from us asap</p>

            </fieldset>

        </form>
    </aside>






</section>



