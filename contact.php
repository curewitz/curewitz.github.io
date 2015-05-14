<?php
include("ssi/header.php");
?>
<style>
<?php include 'styles/contact.css'; ?>
</style>

<div class="first">
	
	
	<section>
		<h1>Contact Us</h1>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2936.8990642116073!2d-70.96308069999999!3d42.599885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e311ace387dd41%3A0xa1c8b0294497318b!2s250+North+St%2C+Danvers%2C+MA+01923!5e0!3m2!1sen!2sus!4v1427994204740" width="300" height="200" frameborder="0" style="border:0"></iframe>
			<h2>Upright Upholstery, Inc.</h2>
			<p>
			250 Norht Street A12<br>
			Danvers, MA 01923<br>
			Phone: (978)-777-4152<br>
		</p><br><br><h3>Hours</h3>

		<table width="980" style="width:300px;border-width:0px;">
<tr>
<td width="109" style="width:93px;border-width:0px;text-align:left;">
<table style="width:182px; border-width:0px;">
<tr>
<td style="width:169px;border-width:0px;"></td>
</tr>
</table>

Monday<br>
Tuesday<br>
Wednesday<br>
Thursday<br>
Friday<br>
Saturday<br>
Sunday<br>
</td>
<td width="179" style="width:104px;border-width:0px;float:left;margin-top: 6px;">
<table style="width:104px;border-width:0px;"></table>

9am - 5pm<br>
9am - 5pm<br>
9am - 5pm<br>
9am - 5pm<br>
9am - 5pm<br>
9am - 5pm<br>
CLOSED<br>
</td>
</tr>
</table>
		<br><br>		

		</section >
	</div>
	<div class="middle">
		<p id="text">
			If you have any questions about our services or wish a free estimate on your project, please<br> 
			fill out the form below and you will receive a prompt reply. Thank you for visiting our web site.
		</p><br>
                <center><form method="POST" name="contactform" action="contactform.php" enctype="multipart/form-data" >
                <fieldset>
	        	<legend>Contact Information</legend>
        		<label for="name">Name:</label>
                                <input type="text" name="contact_name" required><br><br>
                                <label for="email">E-Mail:</label>
                        <input type="email" name="contact_email" autofocus required><br><br>
                                <label for="phone">Phone Number:</label>
                                <input type="tel" name="contact_phone"  placeholder="978-777-4152"
				       pattern="\d{3}[\-]\d{3}[\-]\d{4}" title="Must be 999-999-999 format"><br><br>
				<label for='uploaded_file'>To upload multipe pictures please upload compressed (.zip) folder</label><br><br>
				<label for='uploaded_file'>Select A File To Upload:</label>
                                <input type="file" name="uploaded_file"><br><br>
				<label for="preferred_method">Preferred Method of Contact:</label>
                                <select name="contact_method" >
                                    <option value="E-mail">E-mail</option>
                                    <option value="Phone">Phone</option>
				</select><br><br>
				Tell us about your Piece:<br>
                                <textarea name="contact_job" placeholder= "Complete this form for a Free Estimate"></textarea><br>
				
                                <input type="submit" name="submit" value="Submit">
				
                        </fieldset>
                        </form></center>
	</section>
	

</div>
<div class="bottom">
	<section id="bottom">
	<p>
		
	</p>
</section>
</div>
<?php
include("ssi/footer.html");
?>
