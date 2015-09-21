<!-- This is the section for the Fixed wing flights -->
<section class="planes">
        
        <!-- All the main Content goes in the LEFT side div -->
        <div class="left-side">
                <?php

                	$image_properties = array(
                                'src'   => '../assets/img/fttl/A_A2.jpg',
                                'alt'   => 'Fly to the limit Aircrafts',
                                'class' => 'post_images'

                	);

                echo img($image_properties);
                ?>
                
                <div class="glider-content">
                    <h1>Fixed Wing Adventures</h1>


                
                        <h3>Fixed Wing Adrenaline Adventures</h3>
                        <p>Experience adrenaline-fueled adventure flights and mind-blowing aerobatic maneuvers.</p>

                        <p>Viewed from the comfort and excitement of a fixed wing small plane, the unique alpine terrain of New Zealand’s Southern Alps and Mt Aspiring National Park – a World Heritage Area - are beyond phenomenal. Views only accessible by air are stretched before you as far as the eye (or digital camera) can see. Our experienced pilots offer flights from 20 minutes to 2 hours, so you can see as much as you want in the time you have available. Experience the beauty of the Lake Wanaka region and its surrounding areas in a time span impossible by any other mode of transportation.</p>

                        <p>Choose to fly by small plane or in a vintage WW1 Tiger Moth biplane, a truly special experience available in the Lake Wanaka region. Reach out and touch the sky from the open cockpit; with your leather aviator’s jacket and leather helmet - you are Amelia Earhart!</p>

                        <p>Or you can even scenic fly yourself! Operator’s at Wanaka Airport offer a once-in-a-lifetime experience of being the pilot of a small aircraft. Fly towards Mt Aspiring and back for some of the best memories of your life.</p>

                        <p>If Milford Sound is on your wish list, make sure you take a Milford scenic flights from Wanaka. The flight path from Wanaka Airport to Milford Sound soars above glaciers of Mt Aspiring Te Wahi Pounamu World Heritage Area, and the Main Divide – the backbone of New Zealand’s mighty Southern Alps – and remote native beech forest and wilderness. It’s the longest and most spectacular flight you can experience with more beauty, more majesty and more value than any other location.</p>

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