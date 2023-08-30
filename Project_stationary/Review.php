<?php

include_once 'db.php';

//INSERT Review
  if (isset($_POST['addReview']))
  {
    $Name = $_POST['Name'];
    $Surname = $_POST['Surname'];
    $Review = $_POST['Review'];
    $addReviewQuery = "INSERT INTO review(Name,Surname,Review) VALUES('$Name','$Surname','$Review') ";
    $addReview_Result = mysqli_query($link,$addReviewQuery);
  }

?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
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
        <!-- basic -->
<!-- site metas -->
<title>STATIONARY STORE </title>
<!-- site icons -->
<link rel="icon" href="images/fevicon/book_icon.png" type="image/gif" />
<!-- bootstrap css -->
<!-- Site css -->
<link rel="stylesheet" href="css/style.css" />
<!-- responsive css -->
<!-- colors css -->
<link rel="stylesheet" href="css/colors1.css" />
<!-- custom css -->
<link rel="stylesheet" href="css/custom.css" />

    </head>

    <body>
        <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>support@email.com  
                        <i class="fa fa-phone-alt"></i>+012-345-6789
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
                            <a href="Product_list.php" class="nav-item nav-link" >Product</a>
                             <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                            <a href="about.html" class="nav-item nav-link">ABOUT</a>
                            <a href="Review.php" class="nav-item nav-link active">Review</a>
                        </div>
                        <div class="navbar-nav ml-auto">
                           
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->      
        
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
                    <li class="breadcrumb-item active">Review</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Review Start -->
        <div class="review">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-12 rows">
                        <div>
                            <div class="col-md-12 rows" >
                            <?php 
                                $query = "SELECT * FROM review";
                                $result = mysqli_query($link,$query);

                                if(mysqli_num_rows($result)>0)
                                {
                                  while ($row = mysqli_fetch_array($result)) {
                                    ?>
                            <div class="review-text">
                                <div class="rows">
                                <img src="img/user_review.png" alt="Image">
                                <h2><?php echo $row['Name']; ?>
                                     <div class="col-md-6"></div> </h2>
                                <h3> <?php echo $row['Surname']; ?></h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h5>
                                    <?php echo $row['Review']; ?>
                                </h5>
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
        <!-- Review End -->  

        <!-- Newsletter Start -->
        <div class="newsletter">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Send Us Review</h1>
                    </div> 
                        <!--Send Message start-->
                            <div class="container-fluid">
                             <div class="row">
                                <div class="col-lg-8">
                                    <div class="contact-form">
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" name="Name" placeholder="Your Name" />
                                                    <input type="text" class="form-control" name="Surname" placeholder="Your Surname" />
                                                </div>
                                            </div>
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows=" " name="Review" placeholder="Message"></textarea>
                                                    </div>
                                            <div class="form">
                                                <button type="submit" name="addReview">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </div>
                        <!--Send Message End-->
                </div>
            </div>
        </div>
        <!-- Newsletter End -->  
        
        <!-- Footer Start -->

          <footer class="footer-distributed">

            <div class="footer-left">

                <h3>FOLLOW<span> US</span></h3>

<div id="social-platforms">
<a class="btn btn-icon btn-facebook" href="#"><i class="fa fa-facebook"></i><span>FACEBOOK</span></a>
<a class="btn btn-icon btn-twitter" href="#"><i class="fa fa-twitter"></i><span>TWITTER</span></a>
<a class="btn btn-icon btn-googleplus" href="#"><i class="fa fa-google-plus"></i><span>INSTAGRAM</span></a>
</div>

                
                <div class="payment-method">
                            <h2>We Accept:</h2>
                            <img src="img/payment-method.png" alt="Payment Method" />
                        </div>


                
                    
                </div>

               
                
            </div>

            <div class="footer-center">

                <div>

                <h3>GET<span> IN TOUCH</span></h3>
                    <i class="fa fa-map-marker"></i>
                    <p><span>Halkali Square</span>Küçükçekmece/Istanbul Turkey</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>+9098981100</p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:support@company.com">AFY@gmail.com</a></p>
                </div>

            </div>

            <div class="footer-right">

                <p class="footer-company-about">
                    <h3>ABOUT<span> SHOP</span></h3>
                    <p>This is an online stationary shop. You can buy your needs from our online shop by secure payment method.</p>
                    <div class="row payment align-items-center">
                    <div class="col-md-6">
                        
                    </div>

                </p>
                          
            </div>

                

        </footer>

        <!-- Footer End -->
        <!-- Footer End -->
        
           
        
        <!-- Back to Top -->
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
