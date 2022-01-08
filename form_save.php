<?php
include 'connectdb.php';

$name = $_POST['name'];
$product = $_POST['product'];
$agency = $_POST['agency'];
$price = $_POST['price'];

$sql = "INSERT INTO tbl_exam(name,product,agency,price)
VALUE('$name','$product','$agency','$price')";

$result = mysqli_query($con, $sql)
    or die("Error in sql : $sql" . mysqli_error($sql));
mysqli_close($con);

if ($result) {
    echo '<script language="javascript">';
    echo 'alert("บันทึกข้อมูลสำเร็จ")';
    echo '</script>';
    echo "<script>window.open('form.php','_self')</script>";
} else {
    echo '<script language="javascript">';
    echo 'alert("บันทึกข้อมูลไม่สำเร็จ")';
    echo '</script>';
    echo "<script>window.open('form.php','_self')</script>";
}
