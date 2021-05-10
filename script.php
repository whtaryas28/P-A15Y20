<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/script.css">
    <script src="js/jquery.js"></script>
    <script src="js/custom.js"></script>
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
    <br><br><br>
        <!-- __________________________________________________________________________________________________________________________________________________________________________________________ -->

    <section id="page2_s1">
        <div class="container-fluid s1_div0" >
            <h2>Scripts</h2>
        </div>
    </section>
        <!-- __________________________________________________________________________________________________________________________________________________________________________________________ -->

    <section id="page2_s2">
        <div class="container s2_div0">
            <div class="s2_div0_grid1 ">
                <div id="responsechange">
            
                </div>  
            </div>
            <div class="s2_div0_grid2 mt-2">
                <div class="s2_div01_grid2">
                    <h4>Telegram</h4>
                    <a href="google" class="images"></a>
                </div>
            
                <div class="s2_div02_grid2"><h4>Search</h4>
                <form action="" >
                <div class="form-group">
                <input type="text" class="form-control p-3">
                <button class="btn btn-danger mt-2">Search</button>
                </form>
                </div>
                </div>
            
            </div>
        </div>
    </section>
        <!-- __________________________________________________________________________________________________________________________________________________________________________________________ -->

    <section>
    ok
    </section>
    <script type="text/javascript">

        $(document).ready(function (){
            function load_page(page) {
            $.ajax({
                url : 'scriptsfetch.php',
                type : 'POST',
                data : {page_no :page},
                success : function(requestdata){
                    $('#responsechange').html(requestdata);
                }
            });
        }
        load_page();
            $(document).on("click","#pagination a",function(e) {
                e.preventDefault();
                var page_id = $(this).attr("id");
                load_page(page_id);
                
            });
        });

    </script>
</body>
</html>