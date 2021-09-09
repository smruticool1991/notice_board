<?php include('../header.php'); ?>

<div class="card card0 border-0">
	
        <div class="row d-flex mb-4">

            <div class="col-lg-3 px-4 text-center mt-5">
                <img src="../image/admin.png" alt="image" class="img-fluid">
                <div class="my-2"><a href="" class="btn btn-info btn-sm w-100">Edit Profile</a></div>
                <div class="my-2"><a href="create_notice.php" class="btn btn-warning btn-sm w-100">Create Notice</a></div>
                <div class="my-2"><a href="index.php" class="btn btn-success btn-sm w-100">View Notice</a></div>
                <div class="my-2"><a href="logout.php" class="btn btn-danger btn-sm w-100">Logout</a></div>
            </div>
            <div class="col-lg-9">
            	<h2 class="mb-0 mr-4 mt-4 text-center">WELCOME TO ADMIN DASHBOARD</h2>
            	<div class="py-5 px-4">
            		<form>
            			<div class="form-group">
            				<label>Subject: </label>
            				<input type="text" name="subject" class="form-control">
            			</div>
            			<div class="form-group">
            				<label>Message: </label>
            				<textarea class="form-control" rows="8"></textarea>
            			</div>
            			<div class="form-group">
            				<label>For Class: </label>
            				<select>
            					<option>All</option>
            					<option>6th</option>
            					<option>7th</option>
            					<option>8th</option>
            					<option>9th</option>
            					<option>10th</option>
            				</select>
            			</div>
            			<div class="form-group">
            				<label>Date:</label>
            				<input type="date" name="date" class="form-control">
            			</div>
            			<div class="text-center">
            			   <button type="submit" class="btn btn-success btn-lg mt-4">Create Notice</button>
            			</div>   
            		</form>
            	</div>               
            </div> 
        </div>
</div>

<?php include('../footer.php');  ?>