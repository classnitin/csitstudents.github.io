  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADD E-Content</title>

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
      .user-name{
      color: white;
     }
    </style>
</head>
<body>

  <header class="header">
    <h3>Department of Computer Science and IT</h3>
  </header>
  
   
      

    <div class="container"> 
     
      
      <form class="event-form" method="POST"  enctype="multipart/form-data" >

         <h6>Add E-content </h6>
         <p class="sub-note">  </p>
         <hr>
         <div class="row">
         <div class="col-6 mb-3">
           <label   class="form-label">Subject<span class="star">*</span></label>
          <input type="text" class="form-control" id="" name="subject" value="Computer Science"  placeholder="Enter Subject Name" required>
           
        </div>
         
        </div>
         
         <div class="row">
         <div class=" col mb-3">
           <label  class="form-label">Topic<span class="star">*</span> <span style="color:grey; font-size: 12px;">It Should be in Ex. BCS-102-UNIT-|| format</span> </label>
           <input type="text" class="form-control"  name="topic" placeholder="Enter Subject"    required>
         </div>
         
          
         <div class="row">
         <div class="col mb-3">
           <label class="form-label">Link <span class="star">*</span> <span style="color:grey; font-size: 12px;">Paste Only Links of E-content</span>  </label>
           <input type="text" placeholder="Paste Links Only" class="form-control"  name="link"    required>
         </div>
       </div>


         <button type="submit" name="Submit" class="btn btn-primary">Save</button>
       </div>

        

      
        <?php 

include 'connect.php';

 
$selectquery = "SELECT * FROM content";
$query = mysqli_query($conn,$selectquery);


$row =mysqli_fetch_assoc($query);
?>

         
        
        

      </form>

    </div>


</body>

<?php 

include 'connect.php';

if(isset($_POST['Submit'])){
   $subject=$_POST['subject'];
   $topic=$_POST['topic'];
   $link=$_POST['link'];
   
    
   
 
    $duplicate=mysqli_query($conn,"SELECT * FROM content WHERE link ='$link' ");
    if(mysqli_num_rows($duplicate) > 0) {
          $rows = mysqli_query($conn, "SELECT * FROM content");
         }
   
       else{
   $insertquery =" INSERT INTO content(subject,topic,link) VALUES('$subject','$topic','$link')";
    $result = mysqli_query($conn,$insertquery);

   if($result) {
     echo " <script> alert('E-content saved Successfully '); </script>";
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