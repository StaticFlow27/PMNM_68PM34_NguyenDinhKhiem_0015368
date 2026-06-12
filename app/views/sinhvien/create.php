<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <h1>Day la trang tao sinh vien</h1>
    <form action="/sinhvien/store" method="POST">
        <label for="hoten">Ho ten</label>
        <input type="text" id="hoten" name="hoten">
        <br>
        <label for="mssv">MSSV</label>
        <input type="text" id="mssv" name="mssv">
        <br>
        <label for="gioitinh">Gioi tinh</label>
        <input type="text" id="gioitinh" name="gioitinh">
        <br>
        <input type="submit" value="Them">
    </form>
</body>
</html>