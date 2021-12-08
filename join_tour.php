<?php
include ("connection.php");
if(!isset($_GET['id']))
    header('Location: tours.php');
else if(!isset($_SESSION['id'])){

    header('Location: login.php');
}
$result = $conn->query("SELECT * FROM `event` WHERE `e_id`='".$_GET['id']."'");
$row=$result->fetch_assoc();

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
        <link rel="stylesheet" href="style.css">
    </head>
<body>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Payment Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h1>Payment OK</h1>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="paymentOk" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>

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
                <div class="sidebar-box ftco-animate">
                    <div class="search-tours bg-light p-4">
                        <div class="row">
                            <div class="col-md-8 in_member">
                                <input type="text" class="form-control " id="name" placeholder="Member Name">
                            </div>
                            <div class="col-md-4 in_member">
                                <select name="" id="bgroup" class="form-control">
                                    <option value="">Blood Group</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                            </div>
                            <div class="col-md-8 in_member">
                                <input type="number" class="form-control" id="mobile" placeholder="Mobile Number">
                            </div>
                            <div class="col-md-4 in_member">
                                <button type="button" class="btn btn-primary mybtn" id="addMember">Add More</button>
                            </div>

                            <div class="col-md-4 in_member"></div>
                        </div>
                        <h3>User Member List</h3>

                            <div class="fields">
                                <div class="row">

                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col" width="40%">Name</th>
                                            <th scope="col" width="30%">Mobile</th>
                                            <th scope="col">Blood Group</th>
                                            <th scope="col">Amount</th>
                                        </tr>
                                        </thead>
                                        <tbody id="print">
                                            <tr>
                                                <td>1</td>
                                                <td><?=$_SESSION['full_name'];?></td>
                                                <td><?=$_SESSION['mobile'];?></td>
                                                <td><?=$_SESSION['blood'];?></td>
                                                <td><?=$row['cost'];?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">Total Amount</td>
                                                <td style="font-weight: bold"><?=$row['cost'];?></td>
                                            </tr>
                                        </tbody>
                                    </table>


                                    <div class="col-sm-6 group mb-3">
                                        <input type="submit" data-toggle="modal" data-target="#exampleModal" class="search-submit btn btn-primary" value="Join Tour">



                                        <!-- Modal -->
                                    </div>
                                </div>
                            </div>

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
<script>
    var memberList = [["<?=$_SESSION['full_name'];?>", "<?=$_SESSION['blood'];?>", "<?=$_SESSION['mobile'];?>"]];
    $("#addMember").click(function () {
        if($("#name").val() != '' && $("#bgroup").val()!= '' && $("#mobile").val()!='') {
            var mem = [];
            var name = $("#name").val();
            $("#name").val("");
            mem.push(name);
            var blood = $("#bgroup").val();
            $("#bgroup").val("");
            mem.push(blood);
            var mobile = $("#mobile").val();
            mem.push(mobile);
            $("#mobile").val("");
            memberList.push(mem);
            var list = '';
            for (var i = 0; i < memberList.length; i++) {
                list += '<tr><td>' + (i + 1) + '</td><td>' + memberList[i][0] + '</td><td>' + memberList[i][2] + '</td><td>' + memberList[i][1] + '</td><td><?=$row["cost"];?></td></tr>';
            }
            list += '<tr>' +
                '                                                <td colspan="4">Total Amount</td>' +
                '                                                <td style="font-weight: bold">' + (memberList.length * <?=$row['cost'];?>) + '</td>' +
                '                                            </tr>';
            $("#print").html(list);
            console.log(list);
        }else{
            alert('Wrong Input');
        }
    });
    $("#paymentOk").click(function () {
        $('#exampleModal').modal('hide');

        for (var i = 0; i < memberList.length; i++) {
            $.post("addMember_tour.php", {name: memberList[i][0], mobile: memberList[i][2], blood: memberList[i][1], event: <?php echo $_GET['id']; ?>}, function (data) {

            });
        }

    });
</script>