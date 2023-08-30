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

<!-- section -->
<div class="section padding_layout_1 product_list_main">
  <div class="container">
    <div class="row">

      <div class="col-md-3">
        <div class="side_bar">

          <!--div class="side_bar_blog">
                       
          </div-->

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

                      <div class="side_bar_blog">
            <div class="categary">
              <ul>
                            <li><a href="Best_seller.php"> BEST SELLER <i class="fa fa-line-chart"></i></a></li>
                            <li><a href="Recent_product.php"> RECENT PRODUCTS <i class="fa fa-cubes"></i></a></li>
              </ul>
            </div>

          </div>
        </div>
      </div>


      <div class="col-md-9">
        <div class="row">
                <?php 
                    $query = "SELECT * FROM product";
                    $result = mysqli_query($link,$query);

                    if(mysqli_num_rows($result)>0)
                    {
                      while ($row = mysqli_fetch_array($result)) {

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

        <!--Footer Start-->
        <section>
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
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- menu js -->
<script src="js/menumaker.js"></script>
<!-- wow animation -->
<script src="js/wow.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>
<script>

      // This example adds a marker to indicate the position of Bondi Beach in Sydney,
      // Australia.
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: {lat: 40.645037, lng: -73.880224},
		  styles: [
               {
                 elementType: 'geometry',
                 stylers: [{color: '#fefefe'}]
               },
               {
                 elementType: 'labels.icon',
                 stylers: [{visibility: 'off'}]
               },
               {
                 elementType: 'labels.text.fill',
                 stylers: [{color: '#616161'}]
               },
               {
                 elementType: 'labels.text.stroke',
                 stylers: [{color: '#f5f5f5'}]
               },
               {
                 featureType: 'administrative.land_parcel',
                 elementType: 'labels.text.fill',
                 stylers: [{color: '#bdbdbd'}]
               },
               {
                 featureType: 'poi',
                 elementType: 'geometry',
                 stylers: [{color: '#eeeeee'}]
               },
               {
                 featureType: 'poi',
                 elementType: 'labels.text.fill',
                 stylers: [{color: '#757575'}]
               },
               {
                 featureType: 'poi.park',
                 elementType: 'geometry',
                 stylers: [{color: '#e5e5e5'}]
               },
               {
                 featureType: 'poi.park',
                 elementType: 'labels.text.fill',
                 stylers: [{color: '#9e9e9e'}]
               },
               {
                 featureType: 'road',
                 elementType: 'geometry',
                 stylers: [{color: '#eee'}]
               },
               {
                 featureType: 'road.arterial',
                 elementType: 'labels.text.fill',
                 stylers: [{color: '#3d3523'}]
               },
               {
                 featureType: 'road.highway',
                 elementType: 'geometry',
                 stylers: [{color: '#eee'}]
               },
               {
                 featureType: 'road.highway',
                 elementType: 'labels.text.fill',
                 stylers: [{color: '#616161'}]
               },
               {
                 featureType: 'road.local',
                 elementType: 'labels.text.fill',
                 stylers: [{color: '#9e9e9e'}]
               },
               {
                 featureType: 'transit.line',
                 elementType: 'geometry',
                 stylers: [{color: '#e5e5e5'}]
               },
               {
                 featureType: 'transit.station',
                 elementType: 'geometry',
                 stylers: [{color: '#000'}]
               },
               {
                 featureType: 'water',
                 elementType: 'geometry',
                 stylers: [{color: '#c8d7d4'}]
               },
               {
                 featureType: 'water',
                 elementType: 'labels.text.fill',
                 stylers: [{color: '#b1a481'}]
               }
             ]
		});

        var image = 'images/it_service/location_icon_map_cont.png';
        var beachMarker = new google.maps.Marker({
          position: {lat: 40.645037, lng: -73.880224},
          map: map,
          icon: image
        });
      }
    </script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->
</body>
</html>
