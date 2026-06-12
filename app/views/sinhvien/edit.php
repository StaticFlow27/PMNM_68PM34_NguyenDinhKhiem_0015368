<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h1>Edit sinh vien</h1>
    <form action="/sinhvien/update/<?php echo $sinhvien['id']; ?>" method="post">
        <label for="hoten">Ho ten</label>
        <input type="text" name="hoten" id ="hoten" value="<?php echo $sinhvien['hoten']; ?>">
        </br>
        <label for="mssv">MSSV</label>
        <input type="text" name="mssv" id ="mssv" value="<?php echo $sinhvien['mssv']; ?>">
        </br>
        <label for="gioitinh">Gioi tinh</label>
        <input type="text" name="gioitinh" id ="gioitinh" value="<?php echo $sinhvien['gioitinh']; ?>">
        </br>
        <button type="submit">Cap nhat</button>
    </form>
</body>
</html>