<?php 
$arr = [[5,6,7],[8,9,10],[11,12,13]];
for($i = 0;$i < count($arr);$i++) {
    for($j = 0;$j < count($arr[$i]);$j++) {
        echo $arr[$i][$j]."<br>";
    }
}
// echo $arr[0][0];
// echo $arr[0][1];
// echo $arr[0][2];
// echo $arr[1][0];
// echo $arr[1][1];
// echo $arr[1][2];// giá trị 10 

// echo 123;
//mảng liên hợp 2 chiều
$arrLh = [
    [
        "ten"=>"Thang",
        "tuoi"=>19,
        "email"=>"thang@gmail.com"
    ],
    [
        "ten"=>"Huy",
        "tuoi"=>16,
        "email"=>"huy@gmail.com"
    ],
    [
        "ten"=>"Quang",
        "tuoi"=>17,
        "email"=>"quang@gmail.com"
    ]
    ];
foreach($arrLh as $key => $value) {
    echo "Tên".$value['ten']."Tuổi".$value['tuoi']."Email :".$value['email']."<br>";
}

?>
<table border="1">
    <tr>
        <td>Tên</td>
        <td>Tuổi</td>
        <td>Email</td>
    </tr>
    <?php foreach($arrLh as $key => $value) { ?>
    <tr bgcolor="<?php echo $value['tuoi'] >=18 ? "red" : ""?>">
        <td><?php echo $value['ten']; ?></td>
        <td><?php echo $value['tuoi']; ?></td>
        <td><?php echo $value['email']; ?></td>
    </tr>
    <?php } ?>
</table>