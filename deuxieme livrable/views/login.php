<?php

if(isset($_POST['submit'])){
    $loginAdmin = new AdminController();
    $loginAdmin->auth();
}


?>
	<!-- login section start  -->
	<div class="divider">
	</div>
		<div class="contact-container-tr">
        <?php include "./views/includes/alerts.php" ?>
			<h1>Login </h1>
           <form method="POST">

			<div class="form-tr one">
				
				<div class="email-tr">
					<label for="email">Email</label><br>
                    <input type="text" id="email" name="email">
				</div>
                <div class="email-tr">
						<label for="lname"> password</label><br>
                        <input type="text" name="password" id="password">
               
				</div>
			</div>
			<input type="submit" name="submit" value="login" class="submit-message">
            </form>
			
		</div>
	<!-- login section end -->
	
	<!--Newsletter--->
	<section class="newsletter">
		
		</section>