
 <?php
  
include 'connect.php';

session_start();

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Record</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

    .container{
      background: #fff;
      padding: 15px;
      position: relative;   
      top: 100px;
      border-radius: 5px;
       }
      .fa-trash{
        color: red;
      }
      .pen{
        color: green;
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
  
    <div class="user-details">  
      <p class="user-name"><?php echo $_SESSION['username']; ?>> Add Event to Dashboard</p>
      <a href="admin.php">home</a>
    </div>
      

    <div class="container"> 
     
        <table class="table table-bordered">
  <thead class="table-primary">
    <tr>
      <th scope="col">Sr. NO</th>
      <th scope="col">Event Name</th>
      <th scope="col">Organizer</th>
       <th scope="col">Added By</th>
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
      <th scope="col">Notice</th>
      <th scope="col">Link / Download</th>
      <th scope="col" colspan="2">Operation</th>
    </tr>
  </thead>
  <tbody>
    

   <?php

      include 'connect.php';
      $i = 1;
      $rows = mysqli_query($conn, "SELECT * FROM event ORDER BY id DESC")
      ?>

      <?php foreach ($rows as $row) : ?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row["event_name"]; ?></td>
         <td><?php echo $row["organizer"]; ?></td>
         <td><?php echo $row["admin_details"]; ?></td>
          <td><?php echo $row["start_date"]; ?></td>
           <td><?php echo $row["end_date"]; ?></td>
            <td><?php echo $row["extranote"]; ?></td>
              
        <!-- <td> <img src="update/<?php echo $row["notice"]; ?>" width =200 title="<?php echo $row['notice']; ?>"> </td> -->
          <td><a href="uploads/<?php echo $row["notice"]; ?>"><button class="btn btn-primary">View</button></a></td>

        <td><a href="update_event.php?id=<?php echo $row['id'];?>"><i class="fa-solid fa-pen-to-square pen"></i></a></td>
        <td><a href="delete.php?id=<?php echo $row['id']; ?>"><i class="fa-solid fa-trash"></a></i></td>
      </tr>
      <?php endforeach; ?>
    </table>


 
  </tbody>
</table>

     </div>
   </body>

</html>