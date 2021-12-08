<?php
include ("connection.php");
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
        <div class="slider-item" style="background-image: url('images/bg_6.jpg');" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center">
                    <div class="col-md-7 col-sm-12 ftco-animate">
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Tour</span></p>
                        <h1 class="mb-3">Create New Tours</h1>
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
                    <div class="sidebar-box ftco-animate">
                        <div class="search-tours bg-light p-4">
                            <h3>Create Hotel Discount</h3>
                            <form action="insert_hotel_discount.php" method="post" enctype="multipart/form-data">
                                <div class="fields">
                                    <div class="row">

                                        <div class="textfield-search col-sm-12 group mb-3"><input type="text" name="title" class="form-control" placeholder="Hotel Name"></div>
                                        <div class="textfield-search col-sm-12 group mb-3"><input type="text" name="location" class="form-control" placeholder="Hotel Location"></div>

                                        <div class="check-in col-sm-4 group mb-3"><input type="text" id="checkin_date" name="sdate" class="form-control" placeholder="Check-in date"></div>

                                        <div class="check-out col-sm-4 group mb-3"><input type="text" id="checkout_date" name="edate" class="form-control" placeholder="Check-out date"></div>
                                        <div class="check-out col-sm-4 group mb-3"><input type="text"  name="cost" class="form-control" placeholder="Cost/day"></div>
                                        <div class="check-out col-sm-12 group mb-3"><input type="file"  name="fileToUpload" class="form-control"></div>

                                        <div class="tmTextarea col-sm-12 group mb-3">
                                            <textarea class="form-control" name="desc" placeholder="Description" rows="10"></textarea>

                                        </div>


                                        <div class="col-sm-12 group mb-3">
                                            <input type="submit" class="search-submit btn btn-primary" value="Create Hotel Discount">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

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