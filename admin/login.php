<?php include('../header.php'); ?>
<?php 
function func($errno,$errstr){
	  echo "<b>error: </b> [$errno] $errstr";
	  	  die();
}

set_error_handler(func); ?>
  <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row mb-5 ml-5">user: admin@gmail.com and password: admin@123 	 </div>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="https://i.imgur.com/uNGdWHi.png" class="image pt-5"> </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <?php
                      if(isset($_POST['login'])){
                      	require('../database/connection.php');
                      	$email = $_POST['email'];
                      	$pass = sha1($_POST['password']);
                      	$sql = "select * from admin where user = '$email' and pass = '$pass'";
                      	$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
                      	if(mysqli_affected_rows($conn) > 0){
                      		session_start();
                      		$_SESSION['admin_user'] = $email;
                      		header('location: index.php');
                      	}else{
                      		echo "<script>alert('user and password does not match');</script>";
                      	}
                      }

                    ?>
                    <div class="row mb-4 px-3">
                        <h2 class="mb-0 mr-4 mt-2">ADMIN LOGIN FORM</h2>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Email Address</h6>
                        </label> <input class="mb-4" type="text" name="email" placeholder="Enter a valid email address"> </div>
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Password</h6>
                        </label> <input type="password" name="password" placeholder="Enter password"> </div>
                    <div class="row px-3 mb-4">
                        <div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> <label for="chk1" class="custom-control-label text-sm">Remember me</label> </div> <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                    </div>
                    <div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center" name="login">Login</button> </div>
                    </form>
                </div>
            </div>
        </div>
<?php include('../footer.php'); ?>