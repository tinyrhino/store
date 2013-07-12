<!DOCTYPE html>
<html>
  <head>
    <title>E-Commerce Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <style type="text/css">
      #myCarousel img {width: auto; width: 100%;}
      .thumbnail {margin-top: 20px; background-color: white; padding: 20px;}
       #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }
       #footer {
        background-color: #252525;

      }
      .border {
        border: 1px solid #dadada;
        border-radius: 6px;
        -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .075);
      }
      .title-inverse{color: #6a6a6a;}
      .font-inverse{color: #6a6a6a;}
      .thumbnails a { color: #333;}
      .thumbnails a:hover { color: #333; text-decoration: none;
      }
      #product-thumbnail img{ border: 1px solid #bbb;}
      a:hover {cursor: pointer;}
    </style>
  </head>

  <body style="background-color: #eee;">

   <div id="wrap">

    <div class="container">
     <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <div class="pull-right">

            <ul class="nav">
                <li><a href="login.php">Log in</a></li>
                <li><a href="register.php">Create account</a></li>
                <li class="divider-vertical"></li>
            </ul><!-- ./nav-->

            <ul class="nav" style="margin-right: 0px;">  
                <li><img src="img/shop-icon.png" style="width: 30px; margin: 5px; margin-right: 0px;"></li>
                <li style="margin-left: -5px;">
                  <a>
                    <span class="text-info">n item &nbsp;</span>
                    <span>&pound;0.00</span>
                  </a>
                </li>
                <form class="navbar-form pull-right" action="cart.php">
                  <button type="submit" class="btn btn-inverse">Checkout</button>
                </form>
            </ul><!-- nav -->


          </div><!-- ./pull-right -->
        </div><!-- ./container -->
      </div><!-- ./ navbar inner-->
    </div><!-- ./navbar fixed top-->
  </div><!-- ./container -->

    <div class="container" style="margin-top: 50px; margin-bottom: 20px;">
      <div class="row">

        <div class="span6">
          <a href="index.php"><img src="img/logo.png" style="width: 300px;"></a>
        </div>

        <div class="span6">
          <form class="form pull-right" style="margin-top: 20px;">
            <div class="input-append">
              <input class="span5" id="appendedInput" type="text" placeholder="Search site here">
              <button class="btn" type="submit"><i class="icon-search"></i></button>
            </div>
          </form>
        </div>

      </div><!-- ./row -->
    </div><!-- ./container -->

    <div class="container">

        <div class="row">

          <div class="span7">

            <div class="navbar navbar-inverse">
              <div class="navbar-inner">
                  <ul class="nav" style="margin-left: -10px; margin-right: -10px;">
                    <li><a href="category.php">category</a></li>
                    <li><a href="category.php">category</a></li>
                    <li><a href="category.php">category</a></li>
                    <li><a href="category.php">category</a></li>
                    <li><a href="category.php">category</a></li>
                    <li><a href="category.php" >category</a></li>

                  </ul>
              </div>
            </div>
          </div>

          <div class="span4 pull-right">
          <div class="pull-right">
            <div class="navbar">
              <div class="navbar-inner">
                  <ul class="nav" style="margin-left: -10px; margin-right: -10px;">
                    <li><a href="page.php">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="contact.php">Contact</a></li>

                  </ul>
              </div>
          </div>
        </div>

        </div><!-- ./row -->
    </div><!-- ./container -->

