<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TMF</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>


  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">TMF</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="tours.php" class="nav-link">Tours</a></li>
            <li class="nav-item active"><a href="hotels.php" class="nav-link">Hotels</a></li>
            <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li><?php
              if(isset($_SESSION["id"])){
                  echo '<li class="nav-item"><a href="logout.php" class="nav-link">'.$_SESSION['full_name'].'</a></li>';
              }else{
                  echo '<li class="nav-item btn-info"><a href="login.php" class="nav-link">LOGIN</a></li>';

              }
              ?>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Hotels</span></p>
              <h1 class="mb-3">Hotels</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="row">
              <div class="col-md-6 col-lg-6 mb-4 ftco-animate">
                <a href="#" class="block-5" style="background-image: url('images/hotel-1.jpg');">
                  <div class="text">
                    <span class="price">1500 Taka/night</span>
                    <h3 class="heading">Ocean Peradise</h3>
                    <div class="post-meta">
                      <span>Ameeru Ahmed Magu Male’, Cox's Bazar</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                  </div>
                </a>
              </div>
              <div class="col-md-6 col-lg-6 mb-4 ftco-animate">
                <a href="#" class="block-5" style="background-image: url('images/hotel-2.jpg');">
                  <div class="text">
                    <span class="price">1000 Taka/night</span>
                    <h3 class="heading">Colombus Hotel</h3>
                    <div class="post-meta">
                      <span>Ameeru Ahmed Magu Male’, Saint Martin</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                  </div>
                </a>
              </div>
              <div class="col-md-6 col-lg-6 mb-4 ftco-animate">
                <a href="#" class="block-5" style="background-image: url('images/hotel-3.jpg');">
                  <div class="text">
                    <span class="price">1450 Taka/night</span>
                    <h3 class="heading">Hotel Sayeman</h3>
                    <div class="post-meta">
                      <span>Ameeru Ahmed Magu Male’, Cox's Bazar</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                  </div>
                </a>
              </div>
              <div class="col-md-6 col-lg-6 mb-4 ftco-animate">
                <a href="#" class="block-5" style="background-image: url('images/hotel-4.jpg');">
                  <div class="text">
                    <span class="price">900 Taka/night</span>
                    <h3 class="heading">Heritage Hotel</h3>
                    <div class="post-meta">
                      <span>Ameeru Ahmed Magu Male’, Cox's Bazar</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                  </div>
                </a>
              </div>
              <div class="col-md-6 col-lg-6 mb-4 ftco-animate">
                <a href="#" class="block-5" style="background-image: url('images/hotel-5.jpg');">
                  <div class="text">
                    <span class="price">2500 Taka/night</span>
                    <h3 class="heading">Grand Sultan Hotel</h3>
                    <div class="post-meta">
                      <span>Ameeru Ahmed Magu Male’, Sylhet</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                  </div>
                </a>
              </div>
              <div class="col-md-6 col-lg-6 mb-4 ftco-animate">
                <a href="#" class="block-5" style="background-image: url('images/hotel-6.jpg');">
                  <div class="text">
                    <span class="price">1200 Taka/night</span>
                    <h3 class="heading">Rose View Hotel</h3>
                    <div class="post-meta">
                      <span>Ameeru Ahmed Magu Male’, Sylhet</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                  </div>
                </a>
              </div>
              <div class="col-md-6 col-lg-6 mb-4 ftco-animate">
                <a href="#" class="block-5" style="background-image: url('images/hotel-7.jpg');">
                  <div class="text">
                    <span class="price">300 Taka/night</span>
                    <h3 class="heading">Hotel Hill View</h3>
                    <div class="post-meta">
                      <span>Ameeru Ahmed Magu Male’, Bandarban</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                  </div>
                </a>
              </div>
              <div class="col-md-6 col-lg-6 mb-4 ftco-animate">
                <a href="#" class="block-5" style="background-image: url('images/hotel-8.jpg');">
                  <div class="text">
                    <span class="price">950 Taka/night</span>
                    <h3 class="heading">Kuakata Grand Hotel</h3>
                    <div class="post-meta">
                      <span>Ameeru Ahmed Magu Male’, Kuakata</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
                  </div>
                </a>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col text-center">
                <div class="block-27">
                  <ul>
                    <li><a href="#">&lt;</a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&gt;</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- END -->

          <div class="col-lg-4 sidebar">

              <div class="sidebar-box ftco-animate">
                  <div class="search-tours bg-light p-4">
                      <form action="create_hotel_discount.php">
                          <div class="fields">
                              <div class="row flex-column">
                                  <div class="col-sm-12 group mb-3">
                                      <input type="submit" class="search-submit btn btn-primary" value="Create Hotel Discount">
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>

            <div class="sidebar-box ftco-animate">
              <div class="search-tours bg-light p-4">
                <h3>Find your tour</h3>
                <form action="" method="post">
                  <div class="fields">
                    <div class="row flex-column">

                      <div class="textfield-search col-sm-12 group mb-3"><input type="text" class="form-control" placeholder="Search Location"></div>

                      <div class="check-in col-sm-12 group mb-3"><input type="text" id="checkin_date" class="form-control" placeholder="Check-in date"></div>

                      <div class="check-out col-sm-12 group mb-3"><input type="text" id="checkout_date" class="form-control" placeholder="Check-out date"></div>
                      <div class="select-wrap col-sm-12 group mb-3">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control">
                          <option value="">Guest</option>
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                      <div class="col-sm-12 group mb-3">
                        <input type="submit" class="search-submit btn btn-primary" value="Find Flights">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Categories</h3>
                <li><a href="#">Tours <span>(12)</span></a></li>
                <li><a href="#">Hotels <span>(22)</span></a></li>
                <li><a href="#">Cruises <span>(37)</span></a></li>
                <li><a href="#">Restaurant <span>(42)</span></a></li>
                <li><a href="#">Destination <span>(14)</span></a></li>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Tag Cloud</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Life</a>
                <a href="#" class="tag-cloud-link">Sport</a>
                <a href="#" class="tag-cloud-link">Tech</a>
                <a href="#" class="tag-cloud-link">Travel</a>
                <a href="#" class="tag-cloud-link">Life</a>
                <a href="#" class="tag-cloud-link">Sport</a>
                <a href="#" class="tag-cloud-link">Tech</a>
                <a href="#" class="tag-cloud-link">Travel</a>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php
include ("footer.php");
?>