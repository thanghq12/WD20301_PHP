<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $arrSinhVien = [
            [
                "ten_sv"=>"Nguyễn Văn A",
                "nam_sinh"=>2007,
                "email"=>"nguyenvana@gmail.com"
            ],
            [
                "ten_sv"=>"Nguyễn Văn B",
                "nam_sinh"=>2008,
                "email"=>"nguyenvanb@gmail.com"
            ],
            [
                "ten_sv"=>"Nguyễn Văn C",
                "nam_sinh"=>2009,
                "email"=>"nguyenvanc@gmail.com"
            ]
        ];
        if(isset($_POST['them'])) {
            $ten = $_POST['ten'];
            $namSinh = $_POST['nam_sinh'];
            $email = $_POST['email'];
            //thêm 1 phần tử mới vào mảng liên hợp 2 chiều
            $arrSinhVien[] = [
                "ten_sv"=>$ten ,
                "nam_sinh"=>$namSinh,
                "email"=>$email
            ];
        }
    ?>
    <form method="POST" action="">
    Tên <input type="text" name="ten"/><br/>
    Năm sinh  <input type="text" name="nam_sinh"/><br/>
    Email  <input type="text" name="email"/><br/>
    <input type="submit" name="them" value="thêm"/>
    </form>
    <table border="1">
        <tr>
            <td>Tên</td>
            <td>Năm sinh</td>
            <td>Email</td>
        </tr>
        <?php foreach($arrSinhVien as $key=> $value) { ?>
        <tr>
            <td><?php echo $value['ten_sv']; ?></td>
            <td><?php echo $value['nam_sinh']; ?></td>
            <td><?php echo $value['email']; ?></td>
        </tr>
        <?php  }?>
    </table>
</body>
</html>