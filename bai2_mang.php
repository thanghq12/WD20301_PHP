<?php
/* Mảng 1 chiều đơn thuần */
// $a = [5,9,10,1,22,33,44,55,66,77,88]; 
// for($i = 0; $i < count($a);$i ++) {
//     if($a[$i] % 2 == 0 ) {
//     echo $a[$i]."<br/>"; // ptu 5
//     }
// }
// $tong = 0;
// for($i = 0; $i < count($a);$i ++) {
//     $tong += $a[$i];
// }
// echo "Tong la".$tong;
// echo $a[1]."<br/>"; //ptu 9 
// echo $a[2]."<br/>";
// echo $a[3];
// mảng liên hơp 
$manglh = ["a"=>18,"b"=>2,"c"=>1,"d"=>0,"e"=>10];
//duyet mang sử dụng foreach 
// echo $manglh["a"]."<br/>";
// echo $manglh["b"]."<br/>";
// echo $manglh["c"]."<br/>";
// echo $manglh["d"];
foreach($manglh as $key=>$value) {
    echo $key."<br/>";
}
$mangColor = ["red"=>"Màu đỏ","green"=>"Xanh dương","blue"=>"NC biển"]
?>
<table border="1">
    <tr>
        <td>Vị trí</td>
        <td>Giá trị</td>
    </tr>
    <?php foreach($mangColor as $key=>$value) { //jôjoijoi?>
    <tr bgcolor="<?php echo $key; ?>">
        <td><?php echo $key; ?></td>
        <td><?php echo $value; ?></td>
    </tr>
    <?php }?>
   
</table>
