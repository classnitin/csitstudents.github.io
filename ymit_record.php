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
     
        <table class="table table-bordered">
  <thead class="table-primary">
    <tr>
      <th scope="col">Student ID</th>
      <th scope="col"> Name</th>
      <th scope="col">Class</th>
      <th scope="col">Presentation</th>
      <th scope="col">member</th>
      <th scope="col">topic</th>
      <th scope="col">mobile</th>
      <th scope="col">email</th>
    </tr>
  </thead>
  <tbody>
    

   <?php

      include 'connect.php';
      $i = 1;
      $rows = mysqli_query($conn, "SELECT * FROM ymit ORDER BY std_ID DESC")
      ?>

      <?php foreach ($rows as $row) : ?>
      <tr>
        <td><?php echo  $row["std_ID"] ?></td>
        <td><?php echo $row["Name"]; ?></td>
         <td><?php echo $row["std_class"]; ?></td>
          <td><?php echo $row["presentation"]; ?></td>
           <td><?php echo $row["member"]; ?></td>
            <td><?php echo $row["topic"]; ?></td>
             <td><?php echo $row["mobile"]; ?></td>
              <td><?php echo $row["email"]; ?></td>
         
      </tr>
      <?php endforeach; ?>
    </table>


 
  </tbody>
</table>

     </div>
   </body>

</html>