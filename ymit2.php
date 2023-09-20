<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Print YMIT form</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <style>
   body{

      font-family: 'Montserrat', sans-serif;
      color: #36454F;
      margin:20px;
      background: #157DEC;


  }
  .heading{
      text-align: center;
  }
  h2{
      font-weight: bold;
  }

  .container{

    width: 70%;
    padding: 25px;
    margin: 10px;
    background-color: #fff;
    border-radius: 5px;
    position: relative;
    left: 150px;
    line-height: 1.5;
}
.print{
    padding-top:20px;
}
.contact{
    padding-top: 25px;
    font-size: 22px;
}
.note2{
   padding: 10px;
   margin-left: 10px;
}
.form-print{
    width: 70%;
    padding: 20px;
    margin: 10px;
    background-color: #fff;
    border-radius: 5px;
    position: relative;
    left: 120px;
    line-height: 1.5;
    text-align: left;
}
.print-btn{
    display: flex;
    justify-content: center;
    padding: 10px;

}
.print-btn a{
    margin-left: 10px;
}
select option{
    color: grey;
}
.ymnlogo{
    position: absolute;
    left: 70px;
    top: 80px;
    opacity: 0.5;
    width: 100px;
}

@media print {
    body *:not(#print-form):not(#print-form *){
        visibility: hidden;


    }
    #print-form{
        position: relative;
        top: 0;
        left: 50px;

/*        background-image: url("image/ymnlogo.png");*/
    }
    .heading{
        position: relative;
        left:  ;
        border-bottom: 1px solid grey;
    }
    .print h5{
/*        border-bottom: 1px solid grey;*/
        padding: 10px;
        width: 120%;
    }
    .print-btn{
        display: none;
    }

.ymnlogo{
    position: absolute;
    left: -100px;
    top: 30px;
    opacity: 0.5;
    width: 100px;
}
}

.watermark{
    position: absolute;
    left: 450px;
    top: 220px;

}
.watermark img{
    width:300px;
    opacity: 0.6;
}

</style>



</head>
<body>






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
     $transaction=$_POST['transaction'];

     $hide=1;




     $duplicate=mysqli_query($conn,"SELECT * FROM ymit WHERE std_ID ='$std_ID' ");
     if(mysqli_num_rows($duplicate) > 0) {
      $rows = mysqli_query($conn, "SELECT * FROM ymit");
  }

  else{
     $insertquery =" INSERT INTO ymit(std_ID,Name,std_class,presentation,member,topic,mobile,email,transaction) VALUES('$std_ID','$Name','$std_class','$presentation','$member','$topic','$mobile','$email','$transaction')";
     $result = mysqli_query($conn,$insertquery);

     if($result) {
       echo " <script> swal('Congratulations!', '$Name registered Sucessfully..!', 'success'); </script> ";

   }
   else{
    echo "something went wrong";
}
}
}

else{
  echo "";
}
?>


<div class="watermark"><img src="image/ymnlogo.png" alt=""></div>








<?php if(!isset($hide)) {

   ?>
   <div class="container">
      <h5>YMIT Registration form</h5>

      <form action="" method="GET">
        <div class="row">
            <div class="col-md-8">
                <input type="text" placeholder="Enter Your Student ID " name="std_ID" value="<?php if(isset($_GET['std_ID'])){echo $_GET['std_ID'];} ?>" class="form-control">
            </div>
            <div class="col-md-4">
                <button type="submit"  class="btn btn-primary">Verify</button>
            </div>
        </div>
    </form>

    <form method="post" action=""> 
        <div class="row">
            <div class="col-md-12">
                <hr>
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

                            <div class=" form-group col-6  ">
                                <label for="">Student ID</label>
                                <input type="text" name="std_ID" value="<?= $row['std_ID']; ?>"  class="form-control" readonly>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="">Name</label>
                                    <input type="text" value="<?= $row['Name']; ?>" name="Name" class="form-control" readonly>
                                </div>
                                <div class="form-group col-6">
                                    <label for="">Class</label>
                                    <input type="text" value="<?= $row['std_class']; ?>" name="std_class" class="form-control" readonly>
                                </div>
                            </div>



                            <div class="row">
                               <div class="col mb-3 print">
                                 <label   class="form-label">Participate's in <span class="star">*</span> </label>
                                 <select class="form-control" name="presentation" >
                                    <option value="">-- Select Presentation --</option>
                                    <option value="poster presentation">Poster Presentation</option>
                                    <option value="PPT presentation">PPT Presentation</option>
                                    <option value="Model presentation">Model Presentation</option>

                                </select>
                            </div>


                            <div class="col mb-3 print">
                             <label   class="form-label">Participate <span class="star">*</span></label>
                             <select class="form-control" name="member">
                                <option value="">-- Select Participate --</option>
                                <option value="Single">1</option>
                                <option value="double">2</option>
                                <option value="double">3</option>

                            </select>
                        </div>
                    </div>

                    <div class="row">
                       <div class="form-group col-6 " >
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
          <div class=" col mb-3">
                 <label class="form-label">Payment Transaction Id <span class="star">*</span> </label>
                 <input type="text" class="form-control" placeholder="Enter Payment Transaction ID" name="transaction" required>
             </div>

         <div class="form-check note2">
          <input type="checkbox" class="form-check-input" required>
          <label class="form-check-label">Remember After saving Take a print and Submit in Department </label>
      </div>
      <button type="submit"  name="Submit" class="btn btn-primary">Submit</button>


      <?php
  }

}
else
{
    echo "No Record Found";
}
}

}
?>

</div>
</div>

</form>



<?php if(isset($hide))
{

 ?>

 <div class="form-print" id="print-form"> 
    <div class="heading print"> 
        <img class="ymnlogo" src="image/ymnlogo.png" alt="">
     <p>Yeshwant Mahavidyalay Nanded</p>
     <h4>Department of Computer Science & IT</h4>
     <h2>YMIT Festival</h2>
     <p>The Festival of Youth and Technology</p>
     <hr>
 </div>

 <div class="print">


  <?php 
  if ($_SERVER['REQUEST_METHOD']=='POST') {

  }

  ?>



  <h5>Student Info</h5>
  <hr>    
  <p> student ID : <?php echo $_POST['std_ID']; ?></p>
  <p> Student Name: <?php echo $_POST['Name'];  ?> </p>
  <p> Class : <?php echo $_POST['std_class'];  ?> </p>
  <p> Mobile :<?php echo $_POST['mobile'];  ?> </p>
  <p> Email :  <?php echo $_POST['email'];  ?></p>
  <hr>    
  <h5>Presentation info </h5>
  
  <hr>    
  <p> Presentation On: <?php echo $_POST['presentation'];  ?> </p>
  <p>Topic : <?php echo $_POST['topic'];  ?></p> 
  <p>Member :<?php echo $_POST['member'];  ?>  </p>
  <br>
  <p>Transaction ID :<?php echo $_POST['transaction'];  ?>  </p> <br>  <br>    
  <p style="color: grey;"><span>*Note:</span> Please Carry this Print out with you for YMIT </p>


  <div class="print-btn"> 
    <button class="btn btn-primary" onclick="window.print()"> Print </button>
    <a href="ymit2.php" class="btn btn-primary">Cancle</a>
</div>
</div>
</div>
<?php } ?>



</body>
</html>