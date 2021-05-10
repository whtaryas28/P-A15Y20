
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mobile.css">
    <title>Mobile</title>
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&display=swap" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.js"></script>  
    <script src="js/custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <section id="s0">
        <div class="s0_div1">
            <ul class="s0_ul">
            <li><a href="">F</a></li>
            <li><a href="">I</a></li>
            <li><a href="">Y</a></li>
            <li><a href="">L</a></li>
            </ul>
        </div>
        <marquee behavior="" direction="rel">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, officia quasi maxime sint doloribus quod similique dicta alias rerum iste,</marquee>
        
    </section>
        <!-- __________________________________________________________________________________________________________________________________________________________________________________________ -->
    <header>
        <nav class="container-fluid">
            <div id="side_bar">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="logo"><h5>GMODS</h5></div>
            <ul class="slide_bar ">
                <!-- <li class="X-cross"><a href="">X</a></li> -->
                <li><a href="">Home</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">About Us</a></li>
                
            </ul>
        </nav>
    </header>
     <!-- __________________________________________________________________________________________________________________________________________________________________________________________ -->

     <section id="page1_s1" class="container-fluid">
        <div class="page1_s1_div1">
            <h1>Mobiles Phones</h1>
        </div>
     </section>
     <br><br>
    <hr>
     <section id="page1_s2">
         <div class="page1_s2_grid">
            <div   class="s2_grid1">
            <div class="container">
                 <ul class="row mt-2 mb-3" id="mobile_detail"> 
                
                 </ul>
            </div>
            <div id="pagination" class="text-center">
                    <a class="active" href="">1</a>
                    <a href="">2</a>
                    <a href="">3</a>
            </div>
            </div>
            <div class="s2_grid2">
                telegram
            </div>
        </div>
     </section>


    <script type="text/javascript" src="js/jquery.js"></script> 
    <script type="text/javascript">
    $(document).ready(function(){
        function loadpage(page){
            $.ajax({
                url : "ajax-mobilepage.php",
                type : "get",
                data : {page_no : page},
                success: function(data) {
                    $("#mobile_detail").html(data);
                }
            })
        }
  
        loadpage();
    // pagination no___
    $(document).on("click","#pagination a",(e) => {
        e.preventDefault();
        var page_id = $(this).attr("id")
        loadpage(page_id);
    })
});

</script>
</body>
</html>