<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-toggleable-md">
            <h1 class="nav navbar-nav mr-auto">แบบฟอร์มบันทึกข้อมูล</h1>
            <a href="index.php" class="btn btn-primary">ตารางข้อมูล</a>
        </nav>
        <br>
        <form action="form_save.php" method="post">
            <div class="form-group">
                <label for="name">ชื่อผู้ทำรายการ</label>
                <input class="form-control" type="text" name="name" placeholder="กรอกชื่อสกุล" required>
                <br>
                <label for="product">รายการสินค้า</label>
                <select name="product" id="product" class="form-control" required>
                    <option value="">-เลือกรายการสินค้า-</option>
                    <option value="1">Mobile Application</option>
                    <option value="2">Web Application</option>
                    <option value="3">ERP</option>
                </select>
                <br>
                <label for="agency">หน่วยงานที่สั่งซื้อ</label>
                <input class="form-control" type="text" name="agency" placeholder="ชื่อหน่วยงาน, บริษัท" required>
                <br>
                <label for="price">ราคาสินค้า</label>
                <input class="form-control" type="text" name="price" placeholder="จำนวนเงิน" required>
                <br>
                <button class="btn btn-success btn-block" type="submit">บันทึก</button>
            </div>
        </form>
    </div>
</body>

</html>