<?php
	include '../view/header.php';
?>
<div class=" container">
<div class=" register">
	<h1>Register</h1>
		  	  <form action="?action=register_action" method="post"> 
				 <div class="col-md-6 register-top-grid">
					<h3>Personal information
                    </h3>
					 <div>
						<span>Username</span>
						<input type="text" name="txtusername"> 
					 </div>
					 <div>
						<span>Password</span>
                                                <input type="password" name="txtpassword"> 
					 </div>
					   <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
					   </a>
					 </div>
				     <div class="col-md-6 register-bottom-grid">
						    <h3>Login information</h3>
							 <div>
								<span>Full name</span>
								<input type="text" name="txtfullname">
							 </div>
							 <div>
								<span>Email</span>
								<input type="email" name="txtemail">
							 </div>
							 <input type="submit" name="dangky" value="Dang ky">
							
					 </div>
					 <div class="clearfix"> </div>
				</form>
			</div>
</div>
<?php
	include '../view/footer.php';
?>