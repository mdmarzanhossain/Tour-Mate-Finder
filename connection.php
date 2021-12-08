<?php

session_start();


$conn = new mysqli("localhost", 'root','', 'tmf');

if($conn->connect_error)
    die("Connection Error:" + $conn->connect_error);
