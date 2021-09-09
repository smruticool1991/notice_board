<?php include('header.php'); ?>
<div class="card card0 border-0">
	<h2 class="mb-0 mr-4 mt-4 text-center">STUDENT SIGNUP FORM</h2>
        <div class="row d-flex">

            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row mb-5"> 	 </div>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="https://i.imgur.com/uNGdWHi.png" class="image pt-5"> </div>
                </div>
            </div>
            <div class="col-lg-6">
                <?php
                   if(isset($_POST['submit'])){
                       $name = $_POST['name'];
                       $email = $_POST['email'];
                     $number = $_POST['number'];
                     $class = $_POST['class'];
                     $password = sha1($_POST['password']);
                     $cpass = sha1($_POST['cpass']);
                     if($password != $cpass){
                        echo "confirm password does not match";
                     }else{
                    include('database/connection.php');
                    $sql ="select email from student where email = '$email'";
                    $result = mysqli_query($conn,$sql);
                    $count = mysqli_affected_rows($conn);
                    if($count > 0){
                        echo "this email id already exist ";
                    }else{
                    $sql = "insert into student (name,email,phone,class,pass)values('$name','$email','$number','$class','$password')";
                    $result = mysqli_query($conn,$sql);
                    if($result){
                        echo "sign up success";
                    }else{
                        echo "error";
                    }
                  }
                  }
                   }

                ?>
                <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" name="register" id="register">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Name</h6>
                        </label> <input class="mb-4" type="text" name="name" placeholder="Enter a valid name" id="name">
                         </div>
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Email Address</h6>
                        </label> <input class="mb-4" type="email" name="email" placeholder="Enter a valid email address" id="email"> </div>
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Phone</h6>
                        </label> <input class="mb-4" type="text" name="number" placeholder="Enter a valid phone number" id="number"> </div>    
                    <div class="row px-3" id="class"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Class</h6>
                        </label> 
                        <select name="class" class="mb-4 form-control" id="class">
                       	<option disabled selected>--Please Select Your Class--</option>
                            <option value="6">6th</option>	
                            <option value="7">7th</option>
                            <option value="8">8th</option>
                            <option value="9">9th</option>
                            <option value="10">10th</option>
                        </select>
                    </div>        
                    <div class="row px-3"> 
                        <label class="mb-1">
                            <h6 class="mb-0 text-sm">Password</h6>
                        </label> 
                          <input type="password" name="password" placeholder="Enter password" id="password"> 
                    </div>
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Confirm Password</h6>
                        </label> <input type="password" name="cpass" placeholder="Enter confirm password" id="cpassword"> </div>    
                    
                    <div class="row mb-3 mt-4 px-3 text-center ml-5 "> <button type="submit" class="btn btn-lg  btn-blue text-center" name="submit" style="margin-left: 50px;">SignUp</button> </div>
                </div>
              </form>  
            </div> 
        </div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
         $('#register').submit(function(){
              var name = $('#name').val();
              var email = $('#email').val();
              var number = $('#number').val();
              var cl = $('#class').val();
              var pass = $('#password');
              var cpass = $('#cpassword');
              if(name == ""){             	
                $('#e_name').text('Please fill the empty field');
                return false;
              }else{
              	var pattern = /^[a-zA-Z]{4,15}$/;
              	if(pattern.test(name)){
              		return true
              	}else{
              		$('#e_name').text('Character between 4 to 15');
              		return false;
              	}
              }
         })
	});
</script>

<?php include('footer.php');