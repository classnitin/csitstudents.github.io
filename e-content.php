 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Content</title>

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
      padding: 25px;
      position: relative;   
      top: 100px;
      border-radius: 5px;
       }
       
      .headname{
      	text-align: center;
      	position: relative;
      	 padding: 10px;
      }
      .table{
      	text-align: center;
      }


    </style>
</head>
<body>

  <header class="header">
    <h3>Department of Computer Science and IT</h3>
  </header>
  
    <div class="user-details">  
      <p class="user-name">E-Content</p>
      <a href="admin.php">home</a>
    </div>
      

    <div class="container"> 

    	<div class="headname">
    		<h4>E-Content of Department of CS & IT</h4>
    	</div>
     
        <table class="table table-bordered table-hover">
  <thead class="table-primary">
    <tr>
      <th scope="col">Sr.no</th>
      <th scope="col"> Subject</th>
      <th scope="col">Class </th>
      <th scope="col">Link</th>
       
    </tr>
  </thead>
  <tbody>
    
  

   
   <?php

      include 'connect.php';
      $i = 1;
      $rows = mysqli_query($conn, "SELECT * FROM content ORDER BY id DESC")
      ?>

      <?php foreach ($rows as $row) : ?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row["subject"]; ?></td>
         <td><?php echo $row["topic"]; ?></td>
        
          <td><a class="btn btn-primary" href="<?php echo $row["link"]; ?>">View</a></td>    
      
      </tr>
      <?php endforeach; ?>
    </table>



     


 
  </tbody>
</table>

     </div>
   </body>

</html>