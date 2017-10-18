    <?php
        session_start();
        
        if (isset($_SESSION['login_user'])) {
            
        }
        else{
             header("location: indexs.php");
        }
        $id = 0;
        $user_id = $_SESSION['login_user'];
        //echo $user_id;
        $db=mysqli_connect('us-cdbr-azure-southcentral-f.cloudapp.net', 'bd175965a430e4', 'b91694c2', 'testappuroo');                
        $query1="SELECT * FROM register where username = '".$user_id."'";
        $result = mysqli_query($db,$query1);
        while($res=mysqli_fetch_array($result)){
           $id=$res['user_id'];
        }

    ?>



<!doctype html>
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Smart Parking System</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
        <!--Google Font link-->
        
        <link rel="stylesheet" href="assets/css/slick/slick.css"> 
        <link rel="stylesheet" href="assets/css/slick/slick-theme.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/iconfont.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/bootsnav.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

        <!-- xsslider slider css -->


        <!--<link rel="stylesheet" href="assets/css/xsslider.css">-->




        <!--For Plugins external css-->
        <!--<link rel="stylesheet" href="assets/css/plugins.css" />-->

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!--<link rel="stylesheet" href="assets/css/colors/maron.css">-->

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">


       


        <div class="culmn">
            <!--Home page style-->


            <nav class="navbar navbar-default bootsnav navbar-fixed">
                

                <!-- Start Top Search -->
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>
                <!-- End Top Search -->


                <div class="container"> 
                    <div class="attr-nav">
                        <ul>
                            
                        </ul>
                    </div> 

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="#brand">
                            <img src="assets/images/logo.png" class="logo" alt="" style="margin-top:-55px; width:200px;  ">
                            <!--<img src="assets/images/footer-logo.png" class="logo logo-scrolled" alt="">-->
                        </a>

                    </div>
                    <!-- End Header Navigation -->

                    <!-- navbar menu -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#home">Home</a></li>   
                            <li><a href="#reserve">Reservation</a></li>
                            <li><a href="#features">Services</a></li>
                            <li><a href="#member">Members</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li><a href="indexs.html">Sign In</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div> 

            </nav>

            <!--Home Sections-->

            



            <!--Business Section-->
            <section id="reserve" class="business bg-grey roomy-70">
                <div class="container">
                <div class="text-center">
                
                    <div class="row">
                        <div class="main_business">
                         <div class="well Well-sm" style=" background-color:#428bca; color:white; font-size:25px; margin-top:-60px;  "> Parking Reservation</div>
                                      Reservation table
                                      <?php
                                        
                                        $query1="SELECT * FROM slot INNER JOIN register ON slot.user_id = register.user_id where slot.user_id = '".$id."'";
                                        $result = mysqli_query($db,$query1);
                                        echo '<center>';
                                        echo '<table border="5">';
                                        while($res=mysqli_fetch_array($result)){
                                        
                                            
                                        
                                             
                                            echo '<tr>' ;
                                            echo '<td>'.$res['slot_no'].'</td>'; 
                                            echo '<td>'.$res['time_added'].'</td>';
                                            echo '<td>'.$res['username'].'</td>';
                                            echo '<td>'.$res['email'].'</td>';

                                            echo '<tr>';
                                           
                                        }
                                        echo '</table>';
                                        echo '</center>';
                                    ?>
                        </div>
                </div> 
            </section>

        </div>

        <!-- JS includes -->

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/css/slick/slick.js"></script>
        <script src="assets/css/slick/slick.min.js"></script>
        <script src="assets/js/jquery.collapse.js"></script>
        <script src="assets/js/bootsnav.js"></script>



        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
        <script type="text/javascript" src="jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
        <script type="text/javascript" src="js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>

    </body>
</html>


    <?php
        if(isset($_POST['submit'])){
        	
            $Slot=$_POST['Select'];
            $Time=$_POST['timeX'];
            if (isset($_SESSION['login_user'])) {
         
        	    $query= "INSERT INTO `slot` (`slot_no`,`time_added`,`user_id`) VALUES('".$Slot."','".$Time."','".$id."')";
        		mysqli_query($db,$query);
        	
            }
        }
    ?>