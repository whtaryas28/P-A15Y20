<?php
 $conn= mysqli_connect('localhost','root','','mobile') or die("Database Establish error");

 $limit_per_page = 6;
 $page= "";
 if(isset($_POST["page_no"])){
     $page = $_POST["page_no"];
 }else{
     $page = 1;
 }

  $offset =($page - 1) * $limit_per_page;

$sql= "SELECT * FROM Scripts LIMIT {$offset},{$limit_per_page}";
 $result = mysqli_query($conn,$sql) or die("Error Fetch data");

 if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
 ?>  
    <div class="media mt-2" >
        <div class="media_div0"><h1 style='color:black; font-size:5rem ; text-align:center; font-weight:900;' ><?php echo "#".$row['ID']; ?></h1></div>
        <div class="media-body mt-2">
        <h5 class="mt-0"> <?php echo $row['heading']; ?></h5>
        <p><?php echo $row['title']; ?><a href="">Read More</a></p>
        </div>
        </div>
        <?php

    }
    

    $sql_total = "SELECT * FROM Scripts ";
$record = mysqli_query($conn,$sql_total) or die("Error Fetch data");
$total_record= mysqli_num_rows($record);
$total_pages = ceil($total_record/$limit_per_page);

{ 
    ?>
    <div id="pagination" class="text-center">

<?php


for ($i=1; $i <= $total_pages; $i++) { 
    ?>
    <a class="active" id=<?php echo $i; ?> href=""><?php echo $i; ?></a>

<?php
}
?>
</div>
<?php

}
    
}
?>