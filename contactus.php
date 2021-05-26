<?php
	// Message Vars
	$msg = '';
	$msgClass = '';

	// Check For Submit
	if(filter_has_var(INPUT_POST, 'submit')){
        // Get Form Data
        $query = htmlspecialchars($_POST['query']);
		$name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);       
        $phone = htmlspecialchars($_POST['phone']);

		// Check Required Fields
		if(!empty($name) && !empty($email) && !empty($phone) && !empty($query)){
			// Passed
			// Check Email
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				// Failed
				$msg = 'Please use a valid email';
				$msgClass = 'alert-danger';
			} else {
				// Passed
				$toEmail = 'alipublicschcpn1@gmail.com';
				$subject = 'Contact Request From '.$name;
				$body = '<h2>Contact Request</h2>
					<h4>Name:</h4><p>'.$name.'</p>
					<h4>Email:</h4><p>'.$email.'</p>                   
                    <h4>Phone/mobile:</h4><p>'.$phone.'</p>
                    <h4>query:</h4><p>'.$query.'</p>

				';

				// Email Headers
				$headers = "MIME-Version: 1.0" ."\r\n";
				$headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

				// Additional Headers
				$headers .= "From: " .$name. "<".$email.">". "\r\n";

				if(mail($toEmail, $subject, $body, $headers)){
					// Email Sent
					$msg = 'Your email has been sent';
					$msgClass = 'alert-success';					
				} else {
					// Failed
					$msg = 'Your email was not sent';
					$msgClass = 'alert-danger';					
				}
			}
		} else {
			// Failed
			$msg = 'Please fill in all fields';
			$msgClass = 'alert-danger';
		}
	}
?>
<?php $page='contactus'; include_once 'inc/header.php'?>
    <!--- Here we have to add google  map-->
<div class="container-fluid">
    <div class="col-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7363.630736795635!2d73.49562681295005!3d17.53632577164235!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1a13e5bae706542d!2sAli%20Public%20School!5e1!3m2!1sen!2sin!4v1614755793417!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
<div class="container">	
    <div class="writeus">
	    <h2>Write To Us</h2>
    </div>
    <hr class="my-4">  	 
	<?php if($msg != ''): ?>
    		<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
	<?php endif; ?>
    <div class="writeform">
    	    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	      <div class="form-group">
		      <label>Name</label>
		      <input type="text" name="name" id="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
	      </div>
	      <div class="form-group">
	      	<label>Email</label>
	      	<input type="text" name="email" id="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
	      </div>	     
          <div class="form-group">
	      	<label>phone/moblie</label>
	      	<input type="text" name="phone" id="phone" class="form-control" value="<?php echo isset($_POST['phone']) ? $phone : ''; ?>">
	      </div>                    
            <div class="form-group">	      	
            <label>Query</label>  
	      	<textarea name="query" id="query" class="form-control" rows="10"><?php echo isset($_POST['query']) ? $message : ''; ?></textarea>
	        </div>
	      <br>
	      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
		  <button type="button" name="reset" class="btn btn-primary" onclick="clean();">Reset</button>    
	  </form>	  
	  <hr class="my-4">
    </div>    
	</div> 
	<script>
        function clean(){  	
            document.getElementById('name').value=null;		
            document.getElementById('email').value=null;				
            document.getElementById('phone').value=null;
            document.getElementById('Query').value=null;						
        }
	</script>
<?php include_once 'inc/footer.php'?>