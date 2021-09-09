<!DOCTYPE html>
<html>
<head>
	<title>Notice Board</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/notice_board/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script type="text/javascript" src="/notice_board/script.js"></script>
</head>
<body>
   
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    	<div class="menu">
    		<nav class="navbar navbar-expand-sm  navbar-dark" style="background-color: #1A237E;">
  <!-- Brand -->
  <a class="navbar-brand" href="/notice_board/">Logo</a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/notice_board/">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Login
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="/notice_board/admin/login.php">Admin Login</a>
        <a class="dropdown-item" href="/notice_board/student/login.php">Student Login</a>
        
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/notice_board/register.php">Register</a>
    </li>
    
  </ul>
  <div class="ml-auto pr-3 text-white"><h3> <?php if(isset($_SESSION['admin_user'])){echo "Welcome to ".$_SESSION['admin_user']; } ?></h3></div>
</nav>
</div>