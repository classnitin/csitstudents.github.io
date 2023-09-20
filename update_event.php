 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Event</title>

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

    .form{
      display: none;
    }
    </style>
</head>
<body>

  <header class="header">
    <h3>Department of Computer Science and IT</h3>
  </header>
  
    <div class="user-details">  
      <p class="user-name">Mr.Shailesh Mane > Add Event to Dashboard</p>
      <a href="admin.php">home</a>
    </div>
      

    <div class="container"> 
     
      
      <form class="event-form" method="POST"  enctype="multipart/form-data" >




<?php 

include 'connect.php';

$id=$_GET['id'];
$selectquery = "SELECT * FROM event where id=$id ";
$query = mysqli_query($conn,$selectquery);


$row =mysqli_fetch_assoc($query);


if(isset($_POST['Submit'])){
   $event_name=$_POST['event_name'];
   $organizer=$_POST['organizer'];
   $start_date=$_POST['start_date'];
   $end_date=$_POST['end_date'];
   $extranote=$_POST['extranote'];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];
   

  

      move_uploaded_file($tmpName, 'upload/' . $newImageName);
    

   $insertquery =" INSERT INTO event(event_name,organizer,start_date,end_date,extranote,notice) VALUES('$event_name','$organizer','$start_date','$end_date','$extranote','$notice')";
    $result = mysqli_query($conn,$insertquery);

   if($result) {
     echo " <script> alert('Event Added Successfully '); </script>";
      }
     else{
    echo "something went wrong";
     }
  }

else{
  echo " Error";
}
?>

         <h6>Update Event</h6>
         <p class="sub-note">Add Event to the Site </p>
         <hr>
         <div class="row">
         <div class="col mb-3">
           <label for="exampleInputEmail1" class="form-label">Event Name <span class="star">*</span></label>
          <input type="text" class="form-control" value="<?php echo $row["event_name"]; ?>" name="event_name" placeholder="Name the Event" required>
           <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
         <div class=" col mb-3">
           <label for="exampleInputPassword1" class="form-label">Organizer <span class="star">*</span> </label>
           <input type="text" class="form-control" value="<?php echo $row["organizer"]; ?>" name="organizer" placeholder="Who's Organizer" required>
         </div>
         </div>
         <div class="row">
         <div class="col mb-3">
           <label for="exampleInputPassword1" class="form-label">Start Date <span class="star">*</span></label>
           <input type="date" class="form-control" value="<?php echo $row["start_date"]; ?>" name="start_date" id="" required>
         </div>

         <div class="col mb-3">
           <label for="exampleInputPassword1" class="form-label">End Date <span class="star">*</span></label>
           <input type="date" class="form-control" value="<?php echo $row["end_date"]; ?>" name="end_date" id="exampleInputPassword1" required>
         </div>
         </div>

         <div class="mb-3">
           <label for="exampleInputPassword1" class="form-label">Notice<span class="star2"> (optional)</span></label>
           <input type="text" class="form-control" value="<?php echo $row["extranote"]; ?>" name="extranote" id="exampleInputPassword1" placeholder="Let's Know Something about Event...">
         </div>
          <div class="row"> 
         <div class="col">
           <label for="exampleInputPassword1" class="form-label">Upload Notice<span class="star2">  (optional)</span></label>
            <p><?php if ($row['notice']){
               ?>  Uploaded file : <a href="<?php echo $row["notice"]; ?>"><?php echo $row["notice"]; ?></a> 
            <?php } ?></p>
           <input type="file" class="form-control" value="" name="notice" id="exampleInputPassword1" placeholder=" ">
         </div>
         </div>

        

         <button type="submit" name="Submit" class="btn btn-primary">Update</button>
      </form>

    </div>


</body>



</html>