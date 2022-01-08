<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
    include 'connectdb.php';
    $query = "SELECT * FROM tbl_exam";
    $result = mysqli_query($con, $query)
        or die("Error in sql : $query" . mysqli_error($query));
    mysqli_close($con);
    ?>
    <div class="container">
        <nav class="navbar navbar-toggleable-md">
            <h2 class="nav navbar-nav mr-auto">ตารางแสดงข้อมูล</h2>
            <a href="form.php" class="btn btn-primary ">เพิ่มข้อมูล</a>
        </nav>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ชื่อผู้ทำรายการ</th>
                    <th>วันที่ที่ทำรายการ</th>
                    <th>รายการสินค้า</th>
                    <th>หน่วยงานที่สั่งซื้อ</th>
                    <th>จำนวนเงิน</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $row) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php if ($row['product'] == "1") {
                                echo "Mobile Application";
                            } elseif ($row['product'] == "2") {
                                echo "Web Application";
                            } else {
                                echo "ERP";
                            }; ?></td>
                        <td><?php echo $row['agency']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>