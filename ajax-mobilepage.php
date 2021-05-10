<?php

$conn= mysqli_connect("localhost","root","","mobile") ;

$sql = "SELECT * FROM Mobiles";
$result = mysqli_query($conn,$sql) or die("Error Fetch data");

if(mysqli_num_rows($result)>0){
    
 while($row = mysqli_fetch_assoc($result)){
        ?>      
                 <li class='col-lg-4 mb-3'>
                    <a href='' class='card bg-dark text-white'>
                    <img src="<?php echo $row['img']; ?>"class='card-img'  alt=''>
                    <div class='card-img-overlay'>
                    <h1 class='card-text'><?php echo $row['Brand']; ?></h1>
                    <h1 class='card-title'><?php echo $row['Model']; ?></h1>
                    </div>
                    </a>
                    </li>
                 <?php
                
                
                 

 }
}


?>