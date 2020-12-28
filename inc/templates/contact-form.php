<form id="contact-form" action="#" method="post" data-url="<?php echo admin_url('admin-ajax.php'); ?>">

	<div class="form-group">
        <label class="form-label" id="nameLabel" for="name"></label>
		<input type="text" class="form-control" placeholder="Name" id="name" name="name">
		<small class="text-danger form-control-msg">Your Name is Required</small>
	</div>

	<div class="form-group">
        <label class="form-label" id="emailLabel" for="email"></label>
		<input type="email" class="form-control" placeholder="Email" id="email" name="email">
		<small class="text-danger form-control-msg">Your Email is Required</small>
	</div>

	<div class="form-group">
        <label class="form-label" id="phoneLabel" for="phone"></label>
        <!-- <textarea name="message" id="message" class="form-control" placeholder="Your Message"></textarea>  -->
        <input type="phone" class="form-control" id="phone" name="phone" placeholder="Phone" tabindex="3">
		 <small class="text-danger form-control-msg">A Message is Required</small>
	</div>
	<div class="margin-top-25">
		<button type="stubmit" class="btn btn-mod btn-border">Submit</button>
		<small class="text-info form-control-msg js-form-submission">Submission in process, please wait..</small>
		<small class="text-success form-control-msg js-form-success">Message Successfully submitted, thank you!</small>
		<small class="text-danger form-control-msg js-form-error">There was a problem with the Contact Form, please try again!</small>
	</div>
</form> 