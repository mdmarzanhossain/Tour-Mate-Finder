<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <p class="bg-dark" style="    color: white;
    font-weight: bold;
    font-size: 20px;
    padding: 10px;">Registration</p>
    <div class="row">
        <div class="col-6 offset-3">
            <form method="post" action="signup.php">

                <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control" name="fname" placeholder="Enter First Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text" class="form-control" name="lname" placeholder="Enter Last Name">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter email">
                </div>


                <div class="form-group">
                    <label for="exampleInputEmail1">Mobile</label>
                    <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile Number">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Emergency Contact</label>
                    <input type="text" class="form-control" name="emobile" placeholder="Enter Emergency Contact">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Blood Group</label>
                    <input type="text" class="form-control" name="blood" placeholder="Enter Blood Group">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Birth Date(DD/MM/YYYY)</label>
                    <input type="text" class="form-control" name="birthdate" placeholder="Enter Birth Date">
                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <p style="margin-bottom: 10px;"> </p>
        </div>
    </div>


</div>
</body>
</html>