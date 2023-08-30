<?php

include_once 'db.php';
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Book List</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- site icons -->
<link rel="icon" href="images/fevicon/book_icon.png" type="image/gif" />
<!-- bootstrap css -->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<!-- Site css -->
<link rel="stylesheet" href="css/style.css" />
<!-- responsive css -->
<link rel="stylesheet" href="css/responsive.css" />
<!-- colors css -->
<link rel="stylesheet" href="css/colors1.css" />
<!-- custom css -->
<link rel="stylesheet" href="css/custom.css" />
<!-- wow Animation css -->
<link rel="stylesheet" href="css/animate.css" />
<link rel="stylesheet" href="css/style2.css" />

<meta charset="utf-8">
        <title>STATIONARY STORE</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style2.css" rel="stylesheet">

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<body id=" " class="it_shop_list">
<!-- loader >
<div class="bg_load"> <img class="loader_animation" src="images/loaders/book_reading_100px.png" alt="#" /> </div>
<end loader -->
<!-- header -->
<header id=" " class="header_style_1">

   
  <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>AFY@gmail.com  
                        <i class="fa fa-phone-alt"></i>+9098981100
                    </div>
                    <div class="col-sm-6">
                            <div class="contact-info">
                                <div class="social">
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.gmail.com/"><i class="fab fa-google-plus"></i></a>
                                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.whatapp.com/"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End --> 
        
        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="Home.php" class="nav-item nav-link">Home</a>
                            <a href="Product_list.php" class="nav-item nav-link active" >Product</a>
                             <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                            <a href="about.html" class="nav-item nav-link">ABOUT</a>
                            <a href="Review.php" class="nav-item nav-link">Review</a>
                        </div>
                        <div class="navbar-nav ml-auto">
                          
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End --> 
</header>
<!-- end header -->

        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="Home.php">
                                <img src="img/online stationary logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->

        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="Home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Product_list.php">Products</a></li>
                    <li class="breadcrumb-item active">Office Stationary</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->

<!-- section -->
<div class="section padding_layout_1 product_list_main">
  <div class="container">
    <div class="row">

      <div class="col-md-3">
        <div class="side_bar">

          <!--div class="side_bar_blog">
                       
          </div-->

          <div class="side_bar_blog">
            <h4>CATAGORY</h4>
            <div class="categary">
                    <div>
                      <form>
                          <ul>
                            <li><a href="School_Stationary.php"><i class="fa fa-home"></i> School Stationary</a></li>
                            <li><a href="Art_Suppliment.php"><i class="fa fa-shopping-bag"></i> Office Stationary</a></li>
                            <li><a href="Electronics.php"><i class="fa fa-laptop"></i> Electronics</a></li>
                            <li><a href="Gift_Souvenir.php"><i class="fa fa-gift"></i> Gift & Souvenir</a></li>
                            <li><a href="Accessories.php"><i class="fa fa-female"></i> Accessories</a></li>
                          </ul>
                      </form> 
                    </div>
            </div>
          </div>
        </div>
      </div>


      <div class="col-md-9">
        <div class="row">
                <?php 
                    $query = "SELECT * FROM `product` WHERE Category = 'Office Stationary';";
                    $result = mysqli_query($link,$query);

                    if(mysqli_num_rows($result)>0)
                    {
                      while ($row = mysqli_fetch_array($result)) {
                        /*$BookName = $row['Name'];
                        $_SESSION['Name'] = $BookName;*/
                        ?>
                         <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
                        <div class="product_list">
                        <div>
                          <form method="post" action="">
                              <div class="product_img center"><a href="Book_detail.php?b_id=<?php echo $row['Product_Id'] ?>"> <img class="img-responsive" src="img2/<?php echo $row['Photo']; ?>" alt=""></a> </div>
                              <div class="product_detail_btm">
                                <div class="center">
                                  <h4><a href="Book_detail.php?b_id=<?php echo $row['Product_Id'] ?>"><?php echo $row['Name']; ?></a></h4>
                                </div>
                                <div class="product_price">
                                  <p><!--<span class="old_price">$15.00</span> – --><span class="new_price"><?php echo $row['Price']; ?> $</span></p>
                                  <p><span class="review">(Monthly Price)</span></p>
                                  <p><span style="color: green;"><?php echo $row['Brand']; ?> </span></p>
                                </div>
                                <div class="center">
                                  <!--div class="center"></div-->
                                  <p><span style="color: grey;"><?php echo $row['Description']; ?> </span></p>
                                </div>
                              </div>
                          </form>
                        </div>
                        </div>
                        </div>
                        <?php 
                        }
                      }
                  ?>
            </div> 
          </div>

        </div>
      </div>
    </div>
</div>
<!-- end section -->
<!-- section -->

<!-- end section -->
<section>
<div class="modal fade" id="search_bar" role="dialog">
  <div class="modal-dialog">
    <Modal content>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
            <div class="navbar-search">
              <form action="#" method="get" id="search-global-form" class="search-global">
                <input type="text" placeholder="Type to search" autocomplete="off" name="s" id="search" value="" class="search-global__input">
                <button class="search-global__btn"><i class="fa fa-search"></i></button>
                <div class="search-global__note">Begin typing your search above and press return to search.</div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End Model search bar -->
        <!--Footer Start-->
        
          <footer class="footer-distributed">
            <div class="footer-left">
                <h3>FOLLOW<span> US</span></h3>
            <div id="social-platforms">
            <a class="btn btn-icon btn-facebook" href="#"><i class="fa fa-facebook"></i><span>FACEBOOK</span></a>
            <a class="btn btn-icon btn-twitter" href="#"><i class="fa fa-twitter"></i><span>TWITTER</span></a>
            <a class="btn btn-icon btn-googleplus" href="#"><i class="fa fa-google-plus"></i><span>INSTAGRAM</span></a>
            </div> 
                <div class="payment-method">
                            <h3>We Accept:</h3>
                            <img src="img/payment-method.png" alt="Payment Method" />
                        </div>
                </div>                
            </div>
            <div class="footer-center">
                <div>
                <h3>GET<span> IN TOUCH</span></h3></div>
                <div>
                    <ul>
                    <i class="fa fa-map-marker"></i>
                    <p><span>Halkali Square</br>Küçükçekmece/Istanbul Turkey</span></p>
                    <li><i class="fa fa-phone"></i>
                    <p><span>+90 989 811 00 25</span></p></li>
                    <li><i class="fa fa-envelope"></i>
                    <p><a href="mailto:support@company.com">AFY@gmail.com</a></p></li>
                    </ul>
                </div>
            </div>
            <div class="footer-right">
                <p class="footer-company-about">
                    <h3>ABOUT<span> SHOP</span></h3>
                    <p><span>This is an online stationary shop. You can buy your needs from our online shop by secure payment method.</span></p>
                    <div class="row payment align-items-center">
                    <div class="col-md-6">
                    </div>
                </p>      
            </div>

                

        </footer>
      </section>
    

        


        <!--Footer End-->
<!-- js section -->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
  
</body>
</html>
