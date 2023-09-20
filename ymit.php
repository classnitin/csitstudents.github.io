  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YMIT Registration</title>

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
     
        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="std_ID" value="<?php if(isset($_GET['std_ID'])){echo $_GET['std_ID'];} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">varify</button>
                                </div>
                            </div>
                        </form>

      

          
         <div class="row">
         
      

        </div>
       
         <div class="row">
         <div class=" col mb-3">
            <?php 
                                     include 'connect.php';

                                    if(isset($_GET['std_ID']))
                                    {
                                        $std_ID = $_GET['std_ID'];

                                        $query = "SELECT * FROM student WHERE std_ID='$std_ID' ";
                                        $query_run = mysqli_query($conn, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?> 
           <label  class="form-label">Student Name <span class="star">*</span> </label>
           <input type="text" class="form-control" value="<?= $row['Name']; ?>"  name="Name" placeholder="Student Name"    required>
         </div>
         
          
         <div class="col mb-3">
           <label class="form-label">Class <span class="star">*</span></label>
           <input type="text" placeholder="Select Class" value="<?= $row['std_class']; ?>" class="form-control" readonly name="std_class"  readonly  required>
         </div>
       </div>

     <?php } } } ?>

      <!--  <div class="row">
         <div class=" col mb-3">
           <label   class="form-label">Participate's in <span class="star">*</span> </label>
           <select class="form-control" name="presentation" >
            <option value="">-- Select Presentation --</option>
                 <option value="poster presentation">Poster Presentation</option>
                 <option value="PPT presentation">PPT Presentation</option>
                 <option value="Model presentation">Model Presentation</option>
                
           </select>
         </div>
         
          
         <div class="col mb-3">
           <label   class="form-label">Participate <span class="star">*</span></label>
              <select class="form-control" name="member">
                <option value="">-- Select Participate --</option>
                <option value="Single">Single</option>
                <option value="double">2 Member</option>
                 
           </select>
         </div>
       </div>

      <div class="row">
         <div class="form-group col-6" >
    <label >Topic</label>
    <select class="form-control" name="topic">
      <option value="">-- Select Topic --</option>
      <option value="recent-trend">Recent Trend in Science & Technology</option>
      <option value="commerce & Management">Commerce & Management</option>
      <option value="Humanities">Humanities</option>
      <option value="other">Other</option>
    </select>
  </div>
         </div>
          
          <h6 class="contact">Contact Details </h6>
          <hr>
          <div class="row">
         <div class=" col mb-3">
           <label class="form-label">Mobile Number <span class="star">*</span> </label>
           <input type="number" class="form-control" placeholder="Enter Your Mobile Number" name="mobile" required>
         </div>
         
          
         <div class="col mb-3">
           <label  class="form-label">Email ID <span class="star">*</span></label>
           <input type="email" class="form-control" name="email" placeholder="Enter Email ID"  required>
         </div>
       </div>

       <div class="form-check">
          <input type="checkbox" class="form-check-input" required>
          <label class="form-check-label">Remember After saving Take a print and Submit in Department </label>
      </div>
         -->
        <?php 

include 'connect.php';

 
$selectquery = "SELECT * FROM ymit ";
$query = mysqli_query($conn,$selectquery);


$row =mysqli_fetch_assoc($query);
?>

         <button type="submit" name="Submit" onclick="window.print();" class="btn btn-primary">Submit</button>
         <a href="print.php?std_ID=<?php echo $row['std_ID'];?>"><button class="btn btn-primary">Print </button></a></td>
        

      </form>

    </div>


</body>
<!-- 
<?php 

include 'connect.php';

if(isset($_POST['Submit'])){
   $std_ID=$_POST['std_ID'];
   $Name=$_POST['Name'];
   $std_class=$_POST['std_class'];
   $presentation=$_POST['presentation'];
   $member=$_POST['member'];
   $topic=$_POST['topic'];
   $mobile=$_POST['mobile'];
   $email=$_POST['email'];
    
   
 
    $duplicate=mysqli_query($conn,"SELECT * FROM student WHERE std_ID ='$std_ID' ");
    if(mysqli_num_rows($duplicate) > 0) {
          $rows = mysqli_query($conn, "SELECT * FROM student");
         }
   
       else{
   $insertquery =" INSERT INTO ymit(std_ID,Name,std_class,presentation,member,topic,mobile,email) VALUES('$std_ID','$Name','$std_class','$presentation','$member','$topic','$mobile','$email')";
    $result = mysqli_query($conn,$insertquery);

   if($result) {
     echo " <script> alert('Registration Successfully '); </script>";
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

</html> -->