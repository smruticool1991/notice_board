<?php
session_start();
if(!isset($_SESSION['admin_user'])){
    header('location: login.php');
}
 include('../header.php'); 

 ?>

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
            		<table class="table table-bordered table-striped">
            			<thead>
            				<tr>
            					<th>Subject</th>
            					<th>Message</th>
            					<th>Notice Date</th>
            					<th colspan="2" class="text-center">Action</th>
            				</tr>
            			</thead>
            			<tbody>
            				<tr>
            					<td>Subject</td>
            					<td>Message</td>
            					<td>Notice Date</td>
            					<td class="text-center"><a href="" >Edit</a></td>
            					<td class="text-center"><a href="">Delete</a></td>
            				</tr>
            			</tbody>
            		</table>
            	</div>               
            </div> 
        </div>
</div>

<?php include('../footer.php');  ?>