<?php include('form_validation.php'); ?>
<link rel="stylesheet" href="form.css" type="text/css">
<div id="container">
<form id="contact-form" action"<?php $_SERVER['PHP_SELF']; ?>" method="post">
  <h3>Send an Email:</h3>
  <h4>Fill in the form below, and I'll get back to you within 24 hours</h4>
  
  <div>
    <label>
      <span>Name: (required)</span>
      <input placeholder="Please enter your name" name="name" type="text" tabindex="1" autofocus>
      <?php $name_error ?>
    </label>
  </div>
  
  <div>
    <label>
      <span>Email: (required)</span>
      <input placeholder="Please enter your email address" name="email" type="text" tabindex="2">
      <span class="error"><?php $email_error ?></span>
    </label>
  </div>
  
  <div>
    <label>
      <span>Telephone: (required)</span>
      <input placeholder="Please enter your number" name="phone" type="text" tabindex="3">
      <span class="error"><?php $phone_error ?></span>
    </label>
  </div>
  
  <div>
    <label>
      <span>Subject: (optional)</span>
      <input placeholder="Subject" name="subject" type="text" tabindex="4">
      <span class="error"><?php $sub_error ?></span>
    </label>
  </div>
  
  <div>
    <label>
      <span>Message: (required)</span>
      <textarea placeholder="Include all the details you can" name="message" tabindex="5"></textarea>
      <span class="error"><?php $message_error ?></span>
    </label>
  </div>
  
  <div>
    <button name="submit" type="submit" id"contact-submit">Send Email</button>
  </div>
</form>
</div>    
  