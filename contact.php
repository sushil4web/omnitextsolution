<?php include('header.php'); ?>
	<div class="row">
	  <div class="col-sm-3 col-md-3 col-lg-3">
	  </div>
	  <div class="col-sm-6 col-md-6 col-lg-6">
	  	<H3 class="text-center"><b>Contact Form</b></H3><hr>
	  	<form class="form-horizontal">
	  	  <div class="form-group">
	  	    <label class="col-sm-3">First Name:</label>
	  	    <div class="col-sm-9">
	  	    	<input type="text" name="fName" class="input-block-level" required="required" placeholder="Your First Name">
            </div>
	  	  </div>
	  	  <div class="form-group">
	  	    <label class="col-sm-3">Last Name:</label>
	  	    <div class="col-sm-9">
	  	    	<input type="text" name="fName" class="input-block-level" required="required" placeholder="Your Last Name">
            </div>
	  	  </div>
	  	  <div class="form-group">
	  	    <label class="col-sm-3">Email Address:</label>
	  	    <div class="col-sm-9">
	  	    	<input type="email"  name ="email" class="input-block-level" required="required" placeholder="Your Email Address">
            </div>
	  	  </div>
	  	  <div class="form-group">
	  	    <label class="col-sm-3">Discription:</label>
	  	    <div class="col-sm-9">
	  	    	<textarea name="message" required="required" rows="8" placeholder="Your Message ......"></textarea>
	  	    	<input type="submit" name="submit" class="btn btn-primary btn-large pull-right" value="Send Message"/>
            </div>
	  	  </div>
	  	</form>
		<hr>
		<div>
		    <h4 class="text-center"><b>Our Address</b></h4>
		    <!-- <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p> -->
		    <p>
		        Kupondole<br>
		        Lalitpur,  Nepal
		    </p>
		    <p>
		        info@omnitextsolution.com
		    </p>
		    <p>
		        +9779815720356
		    </p>
		    <p>
		        http://www.omnitextsolution.com
		    </p>
		</div>
		<hr>
		<section class="no-margin">
		    <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?hl=en&q=kupondole&ie=UTF8&t=roadmap&z=17&iwloc=B&output=embed"></iframe>
		</section>
	  </div>
	  <div class="col-sm-3 col-md-3 col-lg-3">
	  </div>
	</div>
<?php include('footer.php'); ?>