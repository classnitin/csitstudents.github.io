  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Registration</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/event.css">

    <style>
      
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

     .contact{
      margin-top: 15px;
      color: grey;
     }
     option{
      color: grey;
     }
    </style>
</head>
<body>

  <header class="header">
    <h3>Department of Computer Science and IT</h3>
  </header>
  
   
      

    <div class="container"> 
     
      
      <form class="event-form" method="POST"  enctype="multipart/form-data" >

         <h6>Student Registration</h6>
         <p class="sub-note">The Stage of Youth </p>
         <hr>
         <div class="row">
         <div class="col-6 mb-3">
           <label class="form-label">Student ID <span class="star">*</span></label>
          <input type="number" class="form-control" pattern=".{10,11}" name="std_ID" placeholder="Enter Student ID" required>
            
        </div>
      </div>
         
         <div class="row">
         <div class=" col mb-3">
           <label class="form-label">Student Name <span class="star">*</span> </label>
           <input type="text" class="form-control" id=" " name="Name" placeholder="Student Name" required>
         </div>
         
          
         <div class="col mb-3">
           <label for="exampleInputPassword1" class="form-label">Class <span class="star">*</span></label>
          <select class="form-control" name="std_class" required />
                 <option value="">-- Select Class --</option>
                 <option value="BSc-FY"> BSc-FY </option>
                 <option value="BSc-SY"> BSc-SY </option>
                 <option value="BSc-TY"> BSc-TY </option>
                 <option value="BCS-Fy"> BCS-FY </option>
                 <option value="BSC-SY"> BSC-SY </option>
                 <option value="BSC-TY"> BSC-TY </option>
                 <option value="MSc-FY"> MSc-FY </option>
                 <option value="MSc-SY"> MSc-SY </option>
                   
           </select>
         </div>
       </div>

       <div class="row">
         <div class=" col mb-3">
           <label for="exampleInputPassword1" class="form-label"> Date of Birth <span class="star">*</span> </label>
            <input type="date"class="form-control" name="dob" placeholder="date of Birth" required>
         </div>
         
          
         <div class="col mb-3">
           <label for="exampleInputPassword1" class="form-label">Gender <span class="star">*</span></label>
              <select class="form-control" name="gender"  >
                 <option value="">--Select Gender --</option>
                 <option value="Male">Male</option>
                 <option value="Female">Female</option>
                 
           </select>
         </div>
       </div>

      <div class="row">
         <div class="form-group col-6" >
    
  </div>
         </div>
          
          <h6 class="contact">Contact Details </h6>
          <hr>
          <div class="row">
         <div class=" col mb-3">
           <label  class="form-label">Mobile Number <span class="star">*</span> </label>
           <input type="number" class="form-control" placeholder="Enter Your Mobile Number" pattern=".{10,11}"  name="Mobile" required>
         </div>
         
          
         <div class="col mb-3">
           <label for="exampleInputPassword1" class="form-label">Email ID <span class="star">*</span></label>
           <input type="email" class="form-control" name="email" placeholder="Enter Email ID" id="" required>
         </div>
       </div>

       <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
          <label class="form-check-label" for="exampleCheck1"> Once Save Can not edit</label>
      </div>


         

        

         <button type="submit" name="Submit" class="btn btn-primary">Register</button>
      </form>

    </div>


</body>

<?php 

include 'connect.php';

if(isset($_POST['Submit'])){
   $std_ID=$_POST['std_ID'];
   $Name=$_POST['Name'];
   $std_class=$_POST['std_class'];
   $dob=$_POST['dob'];
   $gender=$_POST['gender'];
   $mobile=$_POST['Mobile'];
   $email=$_POST['email'];


 $duplicate=mysqli_query($conn,"SELECT * FROM student WHERE std_ID ='$std_ID' ");
   if(mysqli_num_rows($duplicate) > 0) {
       echo " <script> alert('Student Already registered'); </script> ";
     }
       
  else{
   $insertquery =" INSERT INTO student(std_ID,Name,std_class,dob,gender,Mobile,email) VALUES('$std_ID','$Name','$std_class','$dob','$gender','$mobile','$email')";
 
    $result = mysqli_query($conn,$insertquery);

   if($result) {
     echo " <script> alert('Registration Successfull '); </script>";
      }
     else{
    echo "something went wrong";
     }
  }
}

else{
   
}
?>


</html>