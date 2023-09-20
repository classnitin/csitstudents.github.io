 <?php
  
include 'connect.php';

session_start();

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css">


	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  
<style>

	body{
		background: #F0FFFF;
	}
	
.header{
	width: 100%;
	height: 50px;
	background:  url("images/bg2.jpeg");
	background-size: cover;
	background-position: center;
	color: #fff;
	padding: 30px;
	box-shadow: 2px 2px 5px grey;
	position: fixed;
	z-index: 1;
}
.header h3{
	position: absolute;
      left:25px;
      top: 20px;
      font-size: 20px;
}
.header a{
	position: relative;
	left: 1110px;
	color: white;
}

.user-details{
	width: 100%;
	height: 30px;
	background: royalblue;
	border-bottom: 1px solid whitesmoke;
	display: flex;
	justify-content: space-between;
	position: fixed;
	top: 60px;
	z-index: 1;
	box-shadow: 2px 2px 5px grey;
}
.user-name{
	position: relative;
	left: 25px;
	color: #fff;
}
.user-details a{
	position: relative;
	right: 32px;
	text-decoration: none;
	color: #fff;
}

.container{
	position: relative;
	top: 120px;
	
}

.cards{
	position: relative;
	right: 20px;
	display: flex;
	flex-wrap: wrap;
	
}
.card{
	position: relative;
	height: 130px;
	width: 220px;
	background: #ffffff;
	margin: 10px;
	box-shadow: 2px 2px 2px grey;
	padding: 15px;

}

.tag-name{
	color: #36454F;
}
.btns{
	position: relative;
	top: px;
	left: 0px;
}
.btns p{
	font-size: 12px;
	color: grey;
}
.btns a{
	text-decoration: none;
	background: royalblue;
	border-radius: 5px;
	padding: 5px 10px;
	font-size: 12px;
	color: white;
}
</style>


</head>


<body>


  <header class="header">
    <h3>Department of Computer Science and IT</h3>
    <a href="index1.html">Home</a>
  </header>
  
    <div class="user-details">  
      <p class="user-name"> <?php echo $_SESSION['username']; ?> > admin Dashboard</p>
      <a href="#">logout</a>
    </div>
      

      <div class="container">
      	<div class="tag-name">
      <h5>Events & Update</h5>
      	<hr>
      </div>

     <div class="cards">

     	<div class="card">
     		<h5>Event</h5>
     		<div class="btns">
     			<p>add event's of cs dept..</p>
     			<a href="http://localhost/CS_Dept/add_event.php">Add Event</a>
     			<a href="http://localhost/CS_Dept/event_record.php">Event Record</a>
     		</div>
     	 </div>


     	<div class="card">
     		<h5>YMIT</h5>
     		<div class="btns">
     			<p>Youth Festival of department..</p>
     			<a href="http://localhost/CS_Dept/ymit2.php">Register</a>
     			<a href="http://localhost/CS_Dept/ymit_record.php">YMIT Record</a>
     		</div>
     	 </div>
          
          <div class="card">
     		<h5>Student's</h5>
     		<div class="btns">
     			<p>Manage Students..</p>
     			<a href="http://localhost/CS_Dept/student.php">Register</a>
     			<a href="">student Record</a>
     		</div>
     	 </div>

     	  <div class="card">
     		<h5>E-content</h5>
     		<div class="btns">
     			<p>Manage E-content..</p>
     			<a href="http://localhost/CS_Dept/add-econtent.php">add</a>
     			<a href="">check Record</a>
     		</div>
     	 </div>

     	  
     		 
     	 
     	 
     </div>

      </div>
      
	
</body>
</html>