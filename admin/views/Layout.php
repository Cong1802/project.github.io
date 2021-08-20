<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../assets/admin/css/Untitled-2.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script type="text/javascript" src="../assets/admin/ckeditor/ckeditor.js"></script>
</head>
	
<body>
	<div class="top_main">
		<div class="d-flex justify-content-between">
			<div class="top_left">
				
				<i class="fal fa-users-cog"></i>
				<span><u>Dashboard</u></span>
			</div>
			<div class="top_right d-flex">
					<div style="font-size: 18px;">
						
						<i class="far fa-bell"></i>
						<i style="margin: 0 10px;"  class="fas fa-envelope"></i>
						
					</div>
					<div class="nav nav-pills" style="margin: auto">
					  <div class="nav-item dropdown">
						<a class="nav-link " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
							<img  src="../assets/admin/images/avatar10.jpg" width="20%"><span style="font-size: 12px;line-height: 60px;padding-left: 10px;;color: black">Your name</span>
						</a>
						<div class="dropdown-menu">
						  <div class="dropdown-divider"></div>
						  <ul class="dropdown-item" href="#">
							  <li><a href=""><i style="padding-right: 5px;" class="far fa-user-circle"></i>Account</a></li>
							  <li><a href="../../login/layouts/Untitled-1.html"><i style="padding-right: 5px;" class="fas fa-sign-in-alt"></i>Logout</a></li>
							  <li><a href=""><i style="padding-right: 5px;" class="fas fa-cog"></i>Sitting</a></li>
                        </ul>
						</div>
					  </div>
					</div>
					
					
				
			</div>
		</div>
	</div>
	
	<main class="main d-flex" style="min-height: calc(100vh - 101px);">
		
		<div class="side-bar">
			<div class="content">
				<span class="btnn">Systems Management</span>
				<span class= "btnx">SM</span>
			</div>
			
			<div class="online " style="padding: 10px 0 10px 10px;">
				<div class="row flex-nowrap col-12">
					<div class=" xxxx">
						<img  src="../assets/admin/images/avatar10.jpg" width="100%">
					</div>
					<div class=" col-9 coll btnn">
						<span> <h5 class="user ">Your name</h5></span>
						<p><font></font>Online</p>
					</div>
				</div>
			</div>
			<div class="admin">
				
				<h3><i class="fas fa-user-shield"></i><span class="btnn">Admin - TCMobile Shop</span> </h3>
			</div>
			<div class="menu">
					<ul class="nav  flex-column">
					  <li class="nav-item list" data-toggle="tooltip" data-placement="right" title="Trang chủ">
						  
						<a class="nav-link active" href="index.php?controller=categories">
							<i class="fas fa-home"></i>
							<span class="btn"><p class="xx">Danh mục sản phẩm</p></span>
						 </a>
					  </li>
					  <li class="nav-item list" data-toggle="tooltip" data-placement="right" title="Danh sách sản phẩm">
						<a class="nav-link" href="index.php?controller=products">
							<i class="far fa-list-alt"></i>
							<span class="btn"><p class="xx">Danh sách sản phẩm</p> </span>
						</a>
					  </li>
					  
						<li class="nav-item list " data-toggle="tooltip" data-placement="right" title="Tài khoản">
						<a class="nav-link  " href="index.php?controller=users">
							<i class="fas fa-user"></i>
							<span class="btn-none btn"><p class="xx">Tài khoản</p> </span>
						</a>
					  </li>
					  <li class="nav-item list" data-toggle="tooltip" data-placement="right" title="Tin tức">
						<a class="nav-link " href="index.php?controller=news">
							<i class="fas fa-newspaper"></i>
							<span class="btn"><p class="xx">Tin Tức</p> </span>
						</a>
					 </li>
						<li class="nav-item list" data-toggle="tooltip" data-placement="right" title="Đăng xuất">
						<a class="nav-link " href="../../login/layouts/Untitled-1.html">
							<i class="fas fa-sign-out-alt"></i>
							<span class="btn"> <p class="xx">Đăng xuất</p></span>
						</a>
					  </li>
						<li class="nav-item list "data-toggle="tooltip" data-placement="right" title="Thoát">
						<a class="nav-link" href="../../login/layouts/Untitled-1.html">
							<i class="fas fa-sign-in-alt"></i>
							<span class="btn"><p class="xx">Thoát</p></span>
						</a>
					  </li>
					</ul>
			</div>
		</div>
		
		<div class="container1 col">
			<div class="bread">
			<nav aria-label="breadcrumb">
			  <ol  class="breadcrumb">
				
					<div class=" button">
						<button  type="button" class="button col-1"><i class="fas fa-bars"></i></button>
					</div>
				
				<li class="breadcrumb-item" ><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Control panel</a></li>
			
			  </ol>
			</nav>
		</div>
			
		
                <section class="content" style="-webkit-box-sizing: border-box;">
                        <?php echo $this->view ?>
                 </section>	


						
                
			</div>
		</div>
	</main>
</body>
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="../assets/admin/js/jquery.min.js" type="text/javascript"></script>
	<script src="../assets/admin/js/Untitled-3.js" type="text/javascript"></script>
</html>
