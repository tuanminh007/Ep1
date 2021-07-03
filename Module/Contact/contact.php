<?php 
$title = "Contact Us";
require_once("Layout/headerforotherpages.php");
?>


	<!-- alert messages -->
	<!-- <div class="alert-success">
		<span>Message Sent! Thank you for contacting us.</span>
	</div> -->
	<!-- <div class="alert-error">
		<span>Something went wrong! Please try again.</span>
	</div> -->

	<div class="contact-container">
        <div class="contact-form">
            <h2>Contact Us</h2>
            <p>We're here to help. If you'd like to know more about any of our products, or want to check on the status of your order, just fill in the contact form below or send an email to ryanacalendar@gmail.com and we'll get back to you as soon as we can. For urgent enquiries, you can call us between 9am and 5pm. We are based in Hanoi, Vietnam.</p>
            <form class="contact" action="mailto:ryanacalendar@gmail.com?subject=Hello" method="post">
                <input type="text" name="name" placeholder="Name" required="true"><br>
                <input type="email" name="email" placeholder="Email*" required="true"><br>
                <textarea name="message"  placeholder="Comment" required="true"></textarea><br>
                <button type="submit" name="submit" class="contact-submit-btn" onclick="">Submit</button>
            </form>
        </div>
    </div>

    <div class="location-title">
        Our location
    </div>

<iframe style="margin-left: 0px;" class="googleMap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.7297133656584!2d105.84690551501244!3d21.00346898601217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac428c3336e5%3A0xb7d4993d5b02357e!2sAptech%20Computer%20Education!5e0!3m2!1sen!2s!4v1623262526343!5m2!1sen!2s" width="1512" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
<?php
require_once("Layout/footer.php");
?>