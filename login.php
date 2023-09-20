    
<?php 

include "connect.php";

session_start();

if(isset($_POST['Submit'])){
   $username=$_POST['username'];
   $password=$_POST['password'];
   
   $result = mysqli_query($conn," SELECT * FROM admin WHERE username ='$username' AND password ='$password' ");
    // $res = mysqli_query($conn," SELECT name from register WHERE mobile= '$mobile' ");
    // echo  $res;

   $row = mysqli_fetch_assoc($result);
   if(mysqli_num_rows($result) > 0){
      if($password == $row["password"]){
         $_SESSION['index'] = true;
         $_SESSION["id"] = $row["id"];
         $_SESSION["username"]= $row['username'];
         header("Location: dashboard.php");
        
      }
      else{
        echo "<script> alert('Incorrect Password'); </script> ";
      }
   }
   else{
    echo "<script> alert('User Not Registered'); </script>";
   }
 
 
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>

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
    </style>
</head>
<body>

    <header class="header">
        <h3>Department of Computer Science and IT</h3>
    </header>
    
    <div class="user-details">  
     
      <!-- <a href="admin.php">home</a> -->
    </div>
      

    <div class="container"> 
     
      
      <form class="event-form" method="POST"> 

         <h4>Login </h4>
         <p class="sub-note"></p>
         <hr>
          
         <div class="mb-3">
           <label for="exampleInputPassword1" class="form-label">Username <span class="star">*</span></label>
           <input type="text" name="username" class="form-control" id=" " placeholder="Enter Username">
         </div>
 

         <div class="mb-3">
           <label for="exampleInputPassword1" class="form-label">Password <span class="star">*</span></label>
           <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="password">
         </div>
         <div class="sign-up"><p>Not a Member ? <a href="http://localhost/CS_Dept/add_admin.php">Sign-up</a></p></div>

         <button type="submit"  name="Submit" class="btn btn-primary">Login</button>
      </form>

    </div>


</body>
 
</html>