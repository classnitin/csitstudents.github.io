   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/add_admin.css">

    <style>
        body{

        }
      
    @media screen and (max-width: 580px){

     .user-details{
      display: flex;
      flex-wrap: wrap;
      height: 50px;
     }
     .user-details a{
      position: relative;
      top: 20px;
     }
    }

    .event-form{
    width: 50%;
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    position: relative;
    left: 250px;
    top:130px;
    }
}

.event-form{
    position: relative;
    margin-top: -100px;
}

    </style>

</head>
<body>

    <header class="header">
        <h3>Department of Computer Science and IT</h3>
    </header>
    x
    <div class="user-details">  
     
      <!-- <a href="admin.php">home</a> -->
    </div>
      

    <div class="container"> 
     
      
      <form class="event-form" method="POST"> 

         <h4>Register Admin</h4>
         <p class="sub-note"></p>
         <hr>
         <div class="mb-3">
           <label for="exampleInputEmail1" class="form-label">Name <span class="star">*</span></label>
          <input type="text" name="Name" class="form-control" id="" placeholder="Enter Your Name">
           <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
         <div class="mb-3">
           <label for="exampleInputPassword1" class="form-label">Username <span class="star">*</span></label>
           <input type="text" name="username" class="form-control" id=" " placeholder="Enter Username">
         </div>

         <div class="mb-3">
           <label for="exampleInputPassword1"  class="form-label">Email Id <span class="star">*</span></label>
           <input type="email" name="email" class="form-control" id="" placeholder="Enter Email Id">
         </div>

         <div class="mb-3">
           <label for="exampleInputPassword1" class="form-label">Password <span class="star">*</span></label>
           <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="password">
         </div>
         <div class="sign-up"><p>Already registered ? <a href="http://localhost/CS_Dept/login.php">Sign-in</a></p></div>

         <button type="submit"  name="register" value="register" class="btn btn-primary">Submit</button>
      </form>

    </div>


</body>
 <?php 

 
$server ='localhost';
$user ='root';
$password ='';
$database='cs_dept';

$port=3307;

$conn = mysqli_connect($server,$user,$password,$database,$port);
 



if(isset($_POST['register'])){
   $Name=$_POST['Name'];
   $username=$_POST['username'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $_SESSION['username']=$Name;
   // header("Location: index.php");
        
   $duplicate= mysqli_query($conn,"SELECT * FROM admin WHERE email='$email' ");
   if (mysqli_num_rows($duplicate) > 0) {
       echo " <script> alert('User Already Registered '); </script> ";
       }
else{
   $insertquery =" INSERT INTO admin(Name,username,email,password) VALUES('$Name','$username','$email','$password')";
    $result = mysqli_query($conn,$insertquery);

   if($result) {
     echo " <script> alert('Registered Successfully '); </script>";
      }
     else{
    echo "something went wrong";
     }
  }
}
else{
  echo " Error";
}
?>

</html>