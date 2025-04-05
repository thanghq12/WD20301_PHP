<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        Số a <input type="text" name="soa"/><br/>
        Số b <input type="text" name="sob"/><br/>
        <select name="kieu">
            <option value="1">Cộng</option>
            <option value="2">Trừ</option>
            <option value="3">Nhân</option>
            <option value="4">Chia</option>
        </select>
        <input type="submit" name="nut" value="tinh"/>
    </form>
    <?php
 
        if(isset($_POST['nut'])) {
           
            $soa = $_POST['soa']; // tạo biến hứng giá trị từ form gửi vìa 
            $sob = $_POST['sob'];
            
            $kieu = $_POST['kieu'];
            switch($kieu) {
                case 1:
                    $tong = $soa + $sob;
                    echo "Tổng là ".$tong;
                    break;
                case 2:
                    $hieu = $soa - $sob;
                    echo "Hieu là ".$hieu;
                    break;  
            }
            
        } // khi người dùng ấn vào nút tính 
    ?>
</body>
</html>