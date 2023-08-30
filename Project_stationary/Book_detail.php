<?php

include_once 'db.php';

if (isset($_POST['Buy']))
  {
    $C_Name = $_POST['C_Name'];
    $C_Surname = $_POST['C_Surname'];
    $C_Email = $_POST['C_Email'];
    $Phone_No = $_POST['Phone_No'];
    $Address = $_POST['Address'];
    $Slip = $_POST['Slip'];
    $BDate = $_POST['BDate'];
    $Note = $_POST['Note'];

    $addCustomer = "INSERT INTO customer(C_Id,C_Name,C_Surname,Email,Phone_No,Address,Slip,BDate,Note) VALUES('Null','$C_Name','$C_Surname','$C_Email','$Phone_No','$Address','$Slip','$BDate','$Note') ";
    $addCustomer_Result = mysqli_query($link,$addCustomer);
}


function get_products($cat_id='', $products_id=''){

  global $link;
  $SearchQuery = "SELECT * FROM product";

  if($cat_id != ''){
    $SearchQuery = "SELECT * FROM product WHERE Category = '$cat_id' ";
  }

  if($products_id != ''){
    $SearchQuery = "SELECT * FROM product WHERE Product_Id = '$products_id' ";
  }

  return $result = mysqli_query($link,$SearchQuery);
}


/*function getCustomer()
{
  $post = array();
  $post[0] = $_POST['C_Id'];
  $post[1] = $_POST['C_Name'];
  $post[2] = $_POST['C_Surname'];
  $post[3] = $_POST['Email'];
  $post[4] = $_POST['Phone_No'];
  $post[5] = $_POST['Address'];
  $post[6] = $_POST['Slip'];
  $post[7] = $_POST['BDate'];
  $post[8] = $_POST['Note'];


  return $post;
}

/*function BookDetail(){
  $post = array();
  $post[0] = $_POST['Book_id'];
  return $post;
}
function getbookName($id){

  $GetId = "SELECT Book_id FROM book WHERE Book_id = '$id' ";
  $id = mysqli_row_query($link,$GetId);

  return $id;
}*/

//INSERT Customer
 /* if (isset($_POST['Buy']))
  {
    $Receipt = $_FILES['Receipt']['name'];
    $target = "slip/".basename($Receipt);

    $data = getCustomer();
    $addBookQuery = "INSERT INTO customer(C_Id,C_Name,C_Surname,Email,Phone_No,Address,Slip,BDate,Note) VALUES('Null','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]') ";
    $addBook_Result = mysqli_query($link,$addBookQuery);

    if (move_uploaded_file($_FILES['Receipt']['tmp_name'], $target)) 
    {
      $msg = "Receipt uploaded successfully";
    }
    else
    {
      $msg = "Failed to upload Receipt";
    }
  }*/

  $products_id = "";
  if (isset($_GET['p_id'])) {
    $products_id = $_GET['p_id'];
  }
  $products = get_products('',$products_id);
  $result = mysqli_fetch_assoc($products);

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

<!-- responsive css -->
<link rel="stylesheet" href="css/responsive.css" />
<!-- colors css -->
<link rel="stylesheet" href="css/colors1.css" />
<!-- custom css -->
<link rel="stylesheet" href="css/custom.css" />
<!-- wow Animation css -->
<link rel="stylesheet" href="css/animate.css" />
<!-- zoom effect -->
<link rel='stylesheet' href='css/hizoom.css'>
<link rel='stylesheet' href='css/style2.css'>
<link rel='stylesheet' href='css/style.css'>

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
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End --> 
</header>
<!-- end inner page banner -->
        
        <div class="breadcrumb-wrap">
          <p>  </p>

        </div>

        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="Home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Product_list.php">Products</a></li>
                    <li class="breadcrumb-item active">Product Details</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->

<!-- section -->
        <div class="section padding_layout_1 product_detail">
          <div class="container">
            <div class="row">
              <div class="col-md-9">
                <div class="row">
                  <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="product_detail_feature_img hizoom hi2">
                      <div class='hizoom hi2'> <img src="img/<?php echo $result['Photo']; ?>" alt="#" /> </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-12 col-md-12 product_detail_side detail_style1">
                    <div class="product-heading">
                      <h2><?php echo $result['Name']; ?></h2>
                      <h4><span class="review">Category: </span><?php echo $result['Category']; ?></h4>
                    </div>
                    <div class="product-detail-side"><!--<span><del>$25.00</del></span>--><span class="new-price"><?php echo $result['Price']; ?> $</span><span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span> </div>
                    <div class="detail-contant">
                      <span class="review"><?php echo $result['Description']; ?></span>
                      <p ><br></p>
                      <h4 >Brand: <span style="color: green;"><?php echo $result['Brand']; ?> </span></h4>

                      <form class="cart" method="post" action="">
                        <div class="col-sm-12">
                          <div class="full review_bt_section">
                            <div class="float-right"> <a class="btn sqaure_bt" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Buy now</a> </div>
                          </div>
                          <div class="full">
                            <div id="collapseExample" class="full collapse commant_box">
                             <form accept-charset="UTF-8" action="" method="post">
                                  <fieldset>
                                  <div class="row">
                                    <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label class="field_custom" name="BookName" placeholder=" " type="text"><?php echo $result['Name']; ?></label>
                                    </div>
                                    <!--div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                      <input class="field_custom" name="No" placeholder="No. (Do not enter anything!)" type="number">
                                    </div-->
                                    <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                      <input class="field_custom" name="C_Name" placeholder="Enter Your Name" type="text">
                                    </div>
                                    <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                      <input class="field_custom" name="C_Surname" placeholder="Enter Your Surname" type="text">
                                    </div>
                                    <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                      <input class="field_custom" name="C_Email" placeholder="Enter Your Email" type="email">
                                    </div>
                                    <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                      <input class="field_custom" name="Phone_No" placeholder="Enter Your Phone Number" type="number">
                                    </div>
                                    <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                      <textarea class="field_custom" name="Address" placeholder="Enter Your Address"></textarea>
                                    </div>
                                    <input type="file" name="Slip" placeholder="Uplaod Receipt"><br><span class="review">(Uplaod Slip here!)</span>
                                    <div class="field col-lg-12 col-md-6 col-sm-12 col-xs-12">
                                      <label for="rentedDate">Select Currently Date:</label>
                                      <input class="field_custom" name="BDate" type="date" required>
                                    </div>
                                  <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                      <label for="rentedDate">NOTE:</label>
                                      <input class="field_custom" name="Note" placeholder="Note">
                                  </div>
                                  </div>
                                  </fieldset>
                                  <button type="submit" name="Buy" class="btn sqaure_bt">SUBMIT</button>
                              </form>
                            </div>
                          </div>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="side_bar">
               <div class="side_bar_blog ">
                 <img src="img2/fevicon/apple_pay_150px.png">
                 <img src="img2/fevicon/amazon_pay_150px.png">
               </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- end section -->

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

<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->
<!-- zoom effect -->
<script src='js/hizoom.js'></script>
<script>
        $('.hi1').hiZoom({
            width: 200,
            position: 'right'
        });
        $('.hi2').hiZoom({
            width: 300,
            position: 'bottom'
        });
    </script>
</body>
</html>
