<?php
$con = mysqli_connect("localhost", "root", "", "db_exam")
    or die("Error : " . mysqli_error($con));
//set utf8
mysqli_query($con, "SET NAMES 'utf8");
// set time zone
date_default_timezone_set('Asia/Bangkok');
