<?php
	include '../view/header.php';
?>
	<!--content-->
<div class="container">
    <?php 
    if(empty($_SESSION['messages']))
        {
            $messages="";
            
        }
        else
        {
            $messages=$_SESSION['messages'];
        }
        ?>
		<div class="account">
		<h1>Account</h1>
		<div class="account-pass">
		<div class="col-md-8 account-top">
			<form action="?action=login_action" method="post">
				
			<div> 	
				<span>Email</span>
				<input type="text" name="txtusername"> 
			</div>
			<div> 
				<span >Password</span>
				<input type="password" name="txtpassword">
			</div>	
                            <div>   <span>
                            <?php
                            echo "$messages";
                            ?>
                                </span>
                            </div>
				<input type="submit" name="ok" value="Login"> 
			</form>
                    
		</div>
		<div class="col-md-4 left-account ">
			<a href="single.html"><img class="img-responsive " src="../view/images/s1.jpg" alt=""></a>
			<div class="five">
			<h2>25% </h2><span>discount</span>
			</div>
			<a href="register.html" class="create">Create an account</a>
<div class="clearfix"> </div>
		</div>
	<div class="clearfix"> </div>
	</div>
	</div>

</div>
<?php
	include '../view/footer.php';
?>