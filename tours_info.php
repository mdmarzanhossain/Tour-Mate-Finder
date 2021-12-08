<?php
include ("connection.php");
if(!isset($_GET['id']))
    header('Location: tours.php');
$result = $conn->query("SELECT * FROM `event` WHERE `e_id`='".$_GET['id']."'");
$row=$result->fetch_assoc();
if(isset($_SESSION['id']))
    $res = $conn->query("SELECT count(r_id) as `count`, sum(r_value) as `total` FROM `rate` WHERE `e_id` = '".$_GET['id']."' and `id` = '".$_SESSION['id']."'");
else
    $res = $conn->query("SELECT count(r_id) as `count`, sum(r_value) as `total` FROM `rate` WHERE `e_id` = '".$_GET['id']."'");
$rows = $res->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Voyage - Free Bootstrap 4 Template by Colorlib</title>
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
    <link rel="stylesheet" href="css/css/all.css">
    <link rel="stylesheet" href="style.css">
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
            <li class="nav-item active"><a href="tours.php" class="nav-link">Tours</a></li>
            <li class="nav-item"><a href="hotels.php" class="nav-link">Hotels</a></li>
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
      <div class="slider-item" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Tour</span></p>
              <h1 class="mb-3"><?php echo $row['e_title'] ?></h1>
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

              <img class="post_img" src="<?php echo $row['image'] ?>" alt="">
              <p>Total Cost: <b>৳<?php echo $row['cost'] ?></b></p>
              <p>Date: <b><?php echo date('d M, Y',$row['start_date']) ?></b> to <b><?php echo date('d M, Y',$row['end_date']) ?></b></p>
              <p>Member Limit: <b><?php echo $row['e_min_member'] ?></b> to <b><?php echo $row['e_max_member'] ?></b></p>

              <?php echo $row['e_description'] ?>
              <div class="row">
                  <div class="col-md-6" >

                      <div class="sidebar-box ftco-animate" style="padding-left: 15px;">
                          <div class="search-tours">

                                  <div class="fields">
                                      <div class="row">

                                          <?php
                                          if($row['end_date'] <= time()){


                                                if($rows['count'] == 0 && isset($_SESSION['id'])) {
                                                    ?>

                                                    <section class='rating-widget'>

                                                        <!-- Rating Stars Box -->
                                                        <div class='rating-stars text-center'>
                                                            <ul id='stars'>
                                                                <li class='star' title='Poor' data-value='1'>
                                                                    <i class='fa fa-star fa-fw'></i>
                                                                </li>
                                                                <li class='star' title='Fair' data-value='2'>
                                                                    <i class='fa fa-star fa-fw'></i>
                                                                </li>
                                                                <li class='star' title='Good' data-value='3'>
                                                                    <i class='fa fa-star fa-fw'></i>
                                                                </li>
                                                                <li class='star' title='Excellent' data-value='4'>
                                                                    <i class='fa fa-star fa-fw'></i>
                                                                </li>
                                                                <li class='star' title='WOW!!!' data-value='5'>
                                                                    <i class='fa fa-star fa-fw'></i>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class='success-box'>
                                                            <div class='clearfix'></div>
                                                            <img alt='tick image' width='32'
                                                                 src='data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA0MjYuNjY3IDQyNi42NjciIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQyNi42NjcgNDI2LjY2NzsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTJweCIgaGVpZ2h0PSI1MTJweCI+CjxwYXRoIHN0eWxlPSJmaWxsOiM2QUMyNTk7IiBkPSJNMjEzLjMzMywwQzk1LjUxOCwwLDAsOTUuNTE0LDAsMjEzLjMzM3M5NS41MTgsMjEzLjMzMywyMTMuMzMzLDIxMy4zMzMgIGMxMTcuODI4LDAsMjEzLjMzMy05NS41MTQsMjEzLjMzMy0yMTMuMzMzUzMzMS4xNTcsMCwyMTMuMzMzLDB6IE0xNzQuMTk5LDMyMi45MThsLTkzLjkzNS05My45MzFsMzEuMzA5LTMxLjMwOWw2Mi42MjYsNjIuNjIyICBsMTQwLjg5NC0xNDAuODk4bDMxLjMwOSwzMS4zMDlMMTc0LjE5OSwzMjIuOTE4eiIvPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K'/>
                                                            <div class='text-message'></div>
                                                            <div class='clearfix'></div>
                                                        </div>


                                                    </section>
                                                    <?php
                                                }else{
                                                    $res = $conn->query("SELECT count(r_id) as `count`, sum(r_value) as `total` FROM `rate` WHERE `e_id` = '".$_GET['id']."'");
                                                    $rows = $res->fetch_assoc();
                                                     if($rows['count']!= 0){
                                                        ?>
                                                        <div class='rating-stars text-center'>
                                                            <ul>
                                                                <li class='star' title='Poor' data-value='1'>
                                                                    <i class='fa fa-star fa-fw'></i>
                                                                </li>
                                                                <li class='star' title='Fair' data-value='2'>
                                                                    <i class='fa fa-star fa-fw'></i>
                                                                </li>
                                                                <li class='star' title='Good' data-value='3'>
                                                                    <i class='fa fa-star fa-fw'></i>
                                                                </li>
                                                                <li class='star' title='Excellent' data-value='4'>
                                                                    <i class='fa fa-star fa-fw'></i>
                                                                </li>
                                                                <li class='star' title='WOW!!!' data-value='5'>
                                                                    <i class='fa fa-star fa-fw'></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <?php
                                                    }else{
                                                         if($rows['count'] != 0)
                                                            $rate = number_format((float)($rows['total']/$rows['count']), 2, '.', '');
                                                         else
                                                            $rate = 0;
                                                         ?>
                                                         <div class='rating-stars text-center'>
                                                             <ul>
                                                                 <?php
                                                                    for($i = 0; $i < 5; $i+=1){
                                                                      echo "<li class=\"star ". ($rate <= $i ? '' : 'selected') ."\" title='Poor' data-value='1'>";
                                                                     if($rate > $i && $i+1 > $rate)
                                                                         echo "<i class=\"fas fa-star-half-alt\"></i>";
                                                                     else
                                                                        echo "<i class='fa fa-star fa-fw'></i>";
                                                                    }
                                                                    echo "</li>";
                                                                 ?>

                                                             </ul>
                                                         </div>
                                                         <?php
                                                     }
                                                    //echo '<b>Rating Is : '.  ? () : '0').'</b>';
                                                }
                                          }else{
                                          ?>
                                          <a href="join_tour.php?id=<?=$_GET['id'];?>"><input type="submit" class="search-submit btn btn-primary" value="JOIN TOUR"></a>
                                            <?php
                                          }
                                          ?>
                                      </div>
                                  </div>

                          </div>
                      </div>

                  </div>
              </div>

            <!--<div class="row mt-5">
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
            </div>-->
          </div>
          <!-- END -->

          <div class="col-lg-4 sidebar">
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
                        <input type="submit" class="search-submit btn btn-primary" value="Find Tour">
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
                <li><a href="#">Bus <span>(37)</span></a></li>
                <li><a href="#">Restaurant <span>(0)</span></a></li>
                <li><a href="#">Destination <span>(0)</span></a></li>
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
  <script>
      $(document).ready(function(){

          /* 1. Visualizing things on Hover - See next part for action on click */
          $('#stars li').on('mouseover', function(){
              var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

              // Now highlight all the stars that's not after the current hovered star
              $(this).parent().children('li.star').each(function(e){
                  if (e < onStar) {
                      $(this).addClass('hover');
                  }
                  else {
                      $(this).removeClass('hover');
                  }
              });

          }).on('mouseout', function(){
              $(this).parent().children('li.star').each(function(e){
                  $(this).removeClass('hover');
              });
          });


          /* 2. Action to perform on click */
          $('#stars li').on('click', function(){
              var onStar = parseInt($(this).data('value'), 10); // The star currently selected
              var stars = $(this).parent().children('li.star');

              for (i = 0; i < stars.length; i++) {
                  $(stars[i]).removeClass('selected');
              }

              for (i = 0; i < onStar; i++) {
                  $(stars[i]).addClass('selected');
              }

              // JUST RESPONSE (Not needed)
              var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
              var msg = "";
              if (ratingValue > 1) {
                  msg = "Thanks! You rated this " + ratingValue + " stars.";
              }
              else {
                  msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
              }


              $.post('rate.php',{ event: <?=$_GET['id'];?> ,value: ratingValue});
              responseMessage(msg);


          });


      });


      function responseMessage(msg) {
          $('.success-box').fadeIn(200);
          $('.success-box div.text-message').html("<span>" + msg + "</span>");
      }
      </script>
