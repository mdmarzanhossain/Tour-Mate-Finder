<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>TMF</title>
</head>
<body>
<div class="container"><p class="bg-dark" style="    color: white;
    font-weight: bold;
    font-size: 20px;
    padding: 10px;">Login</p>
    <div class="row">
        <div class="col-6 offset-3">

            <form action="login_verify.php" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">User ID</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <a href="registration.php">Registration</a>
            <?php
            if(isset($_GET['msg'])){
                ?>
                <div class="bg-danger">

                    <?php echo $_GET['msg']; ?>
                </div>
            <?php }
            ?>
        </div>
    </div>
</div>
</body>
</html>