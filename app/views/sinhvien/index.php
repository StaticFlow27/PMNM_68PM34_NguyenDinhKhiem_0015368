<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sach sinh vien</title>
</head>
<body>
    <h1>danh sach sinh vien</h1>

    <table>

        <tr>
            <th>STT</th>
            <th>Ho ten</th>
            <th>MSSV</th>
            <th>Gioi tinh</th>
        </tr>
        <?php
        foreach ($sinhviens as $index => $sinhvien): ?>
            <tr>
                <td><?php echo $index +1; ?></td>
                <td><?php echo $sinhvien['hoten']; ?></td>
                <td><?php echo $sinhvien['mssv']; ?></td>
                <td><?php echo $sinhvien['gioitinh']; ?></td>
                <td>
                    <a href="/sinhvien/edit/<?php echo $sinhvien['id']; ?>">Sua</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    
    <div align="center">
        <?php
            $pageSize = 5;
            for($i = 1; $i <= $totalPage; $i++){
                $offset = ($i - 1) * $pageSize;
                echo "<a href='/sinhvien/index/$pageSize/$offset'>$i</a> ";
            }
        ?>
    </div>
</body>
</html>